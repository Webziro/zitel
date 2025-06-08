<?php
// Email Configuration
define('SMTP_HOST', 'ssl0.ovh.net');
define('SMTP_PORT', 465);
define('SMTP_USERNAME', 'info@zitelfinancials.ca');
define('SMTP_PASSWORD', 'your_password_here');
define('SMTP_FROM_EMAIL', 'info@zitelfinancials.ca');
define('SMTP_FROM_NAME', 'Zitel Website');

// reCAPTCHA Configuration
define('RECAPTCHA_SITE_KEY', '6LfPVFkrAAAAAHf6iTL3hVR3okWuKL2HOfiDQtwD');
define('RECAPTCHA_SECRET_KEY', '6LfPVFkrAAAAAHyqKiatOKf1hYLKlySFHrX8sroj');

// Rate Limiting Configuration
define('RATE_LIMIT_TIMEOUT', 300); // 5 minutes
define('RATE_LIMIT_MAX_ATTEMPTS', 3);

// Error Logging Configuration
define('LOG_FILE', __DIR__ . '/contact.log');
?> 