// Function to handle reCAPTCHA completion
function onRecaptchaComplete(token) {
    document.getElementById('sendMessageButton').disabled = false;
}

// Function to reset reCAPTCHA
function resetRecaptcha() {
    grecaptcha.reset();
    document.getElementById('sendMessageButton').disabled = true;
}

// Handle form submission
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) {
        console.error('Contact form not found!');
        return;
    }

    const submitButton = contactForm.querySelector('button[type="submit"]');
    const successDiv = document.getElementById('success');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        console.log('Form submission started');

        // Check if reCAPTCHA is completed
        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            successDiv.innerHTML = '<div class="alert alert-danger">Please complete the reCAPTCHA verification.</div>';
            return;
        }
        console.log('reCAPTCHA response:', recaptchaResponse ? 'present' : 'missing');

        // Disable submit button and show loading state
        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

        // Get form data
        const formData = new FormData(contactForm);
        formData.append('g-recaptcha-response', recaptchaResponse);

        // Log form data for debugging
        const formDataObj = {};
        formData.forEach((value, key) => {
            formDataObj[key] = value;
        });
        console.log('Form data being sent:', formDataObj);

        // Create XMLHttpRequest
        const xhr = new XMLHttpRequest();
        const url = window.location.pathname.includes('contact.php') 
            ? 'send-email.php' 
            : 'send-email.php';
        
        console.log('Sending request to:', url);
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.onload = function() {
            console.log('Response received:', xhr.status, xhr.statusText);
            console.log('Raw response:', xhr.responseText);

            try {
                const data = JSON.parse(xhr.responseText);
                console.log('Parsed response data:', data);

                if (data.success) {
                    successDiv.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
                    contactForm.reset();
                    grecaptcha.reset();
                } else {
                    successDiv.innerHTML = '<div class="alert alert-danger">' + data.message + '</div>';
                    if (data.message.includes('reCAPTCHA')) {
                        grecaptcha.reset();
                    }
                }
            } catch (error) {
                console.error('Error parsing response:', error);
                successDiv.innerHTML = '<div class="alert alert-danger">An error occurred while processing the server response. Please try again.</div>';
            }

            // Reset button state
            submitButton.disabled = false;
            submitButton.innerHTML = 'Send Message';
            console.log('Form submission completed');
        };

        xhr.onerror = function() {
            console.error('Request failed');
            successDiv.innerHTML = '<div class="alert alert-danger">An error occurred while sending the message. Please try again.</div>';
            submitButton.disabled = false;
            submitButton.innerHTML = 'Send Message';
        };

        // Send the request
        console.log('Sending request to send-email.php');
        xhr.send(formData);
    });
}); 