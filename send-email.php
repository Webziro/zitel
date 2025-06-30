<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Email configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'zitelfinancials@gmail.com');
define('SMTP_PASSWORD', 'qqyd oodh eaph bbdi');
define('SMTP_FROM_EMAIL', 'zitelfinancials@gmail.com');
define('SMTP_FROM_NAME', 'Zitel Contact Form');
define('ADMIN_EMAIL', 'zitelfinancials@gmail.com');
define('ADMIN_NAME', 'Zitel Admin');

// Set headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept, X-Requested-With');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Create debug log file
$logFile = __DIR__ . '/send_email_debug.log';

// Function to write to log
function write_log($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

// Clear log file at start of request
file_put_contents($logFile, '');

// Log request details
write_log("Request Method: " . $_SERVER['REQUEST_METHOD']);
write_log("Request URI: " . $_SERVER['REQUEST_URI']);
write_log("Script Name: " . $_SERVER['SCRIPT_NAME']);
write_log("PHP Self: " . $_SERVER['PHP_SELF']);
write_log("Request Headers: " . print_r(getallheaders(), true));
write_log("POST Data: " . print_r($_POST, true));
write_log("Raw Input: " . file_get_contents('php://input'));

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    write_log("Error: Invalid request method. Expected POST, got " . $_SERVER['REQUEST_METHOD']);
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method. Expected POST, got ' . $_SERVER['REQUEST_METHOD']
    ]);
    exit();
}

// Include PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Function to send email
function sendEmail($name, $email, $subject, $message) {
    global $logFile;
    
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = 'tls';
        $mail->Port = SMTP_PORT;

        // Recipients
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress(ADMIN_EMAIL, ADMIN_NAME);
        $mail->addReplyTo($email); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong></p>
            <p>" . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mail->send();
        write_log("Email sent successfully to " . ADMIN_EMAIL);
        return true;
    } catch (Exception $e) {
        write_log("Error sending email: " . $mail->ErrorInfo);
        throw $e;
    }
}

// Process the form submission
try {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        throw new Exception('Please fill in all required fields, before proceeding!');
    }

    // Verify reCAPTCHA
    $recaptchaSecret = '6Ld19FsrAAAAAHavq_UehQvW9x-a8uiUvRhCIPG9';
    $recaptchaVerify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $recaptchaData = json_decode($recaptchaVerify);

    if (!$recaptchaData->success) {
        throw new Exception('reCAPTCHA verification failed. Please try again.');
    }

    // Send email
    if (sendEmail($name, $email, $subject, $message)) {
        echo json_encode([
            'success' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    }
} catch (Exception $e) {
    write_log("Error: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 