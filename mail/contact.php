<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include configuration
require_once 'config.php';

// Log file setup
$logFile = LOG_FILE;

// Function to log errors
function logError($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

// Verify reCAPTCHA
function verifyRecaptcha($recaptcha_response) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => RECAPTCHA_SECRET_KEY, 
        'response' => $recaptcha_response
    );

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response);

    return $result->success;
}

// Log the request method and POST data
logError("Request Method: " . $_SERVER["REQUEST_METHOD"]);
logError("POST Data: " . print_r($_POST, true));

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    logError("Invalid request method: " . $_SERVER["REQUEST_METHOD"]);
    header("Location: ../contact.php?error=method");
    exit;
}

// Verify reCAPTCHA
if (!isset($_POST['g-recaptcha-response']) || !verifyRecaptcha($_POST['g-recaptcha-response'])) {
    logError("reCAPTCHA verification failed");
    header("Location: ../contact.php?error=captcha");
    exit;
}

// Rate limiting
session_start();
$timeout = 300; // 5 minutes
$max_attempts = 3;

if (isset($_SESSION['last_submission'])) {
    $time_diff = time() - $_SESSION['last_submission'];
    if ($time_diff < $timeout) {
        if (!isset($_SESSION['attempts'])) {
            $_SESSION['attempts'] = 1;
        } else {
            $_SESSION['attempts']++;
        }
        
        if ($_SESSION['attempts'] > $max_attempts) {
            logError("Rate limit exceeded");
            header("Location: ../contact.php?error=rate_limit");
            exit;
        }
    } else {
        $_SESSION['attempts'] = 1;
    }
} else {
    $_SESSION['attempts'] = 1;
}

$_SESSION['last_submission'] = time();

// Validate required fields
$requiredFields = ['name', 'email', 'subject', 'message'];
$missingFields = [];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $missingFields[] = $field;
    }
}

if (!empty($missingFields)) {
    logError("Validation failed: " . print_r($_POST, true));
    header("Location: ../contact.php?error=missing&fields=" . implode(',', $missingFields));
    exit;
}

// Sanitize input data
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    logError("Validation failed: " . print_r($_POST, true));
    header("Location: ../contact.php?error=email");
    exit;
}

// Prepare email content
$to = "info@zitelfinancials.ca";
$subject = "New Contact Form Message: $m_subject";
$email_body = "You have received a new message from your website contact form.\n\n";
$email_body .= "Here are the details:\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $m_subject\n\n";
$email_body .= "Message:\n$message";

// Email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Try to send the email
try {
    // Log attempt to send email
    logError("Attempting to send email to: $to");
    
    // Send email using mail() function
    $mail_sent = mail($to, $subject, $email_body, $headers);
    
    if ($mail_sent) {
        logError("Email sent successfully to: $to");
        header("Location: ../contact.php?success=1");
        exit;
    } else {
        throw new Exception('Failed to send email');
    }
} catch (Exception $e) {
    // Error response
    logError("Exception while sending email: " . $e->getMessage());
    header("Location: ../contact.php?error=mail");
    exit;
}
?>
