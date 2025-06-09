<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Zitel Financials Inc. - Where your numbers makes sense and cents</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Zitel Financials Inc." name="keywords">
        <meta content="Zitel Financials Inc." name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Add reCAPTCHA script -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body class="page">
        <!-- Top Bar Start -->
       <!-- Top Bar Start -->
       <?php
                include "header.php";
            ?>
        <!-- Top Bar End -->
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
       
        <!-- Nav Bar End -->
        
        
        <!-- Contact Start -->
        <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Get In Touch</p>
                    <h2>Get In Touch For Any Information</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Vist Our Office</h3>
                                <p>741 King Str. W. Kitchener, ON N2G 0E9</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for futher enquires</h3>
                                <p>
                                (437) 559-5707</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Send us a Mail</h3>
                                <p>info@zitelfinancials.ca</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="message" id="message" placeholder="Message" required="required"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LfPVFkrAAAAAHf6iTL3hVR3okWuKL2HOfiDQtwD"></div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Find Us on Map Start -->
        <div class="map-section">
            <div class="container">
                <div class="section-header text-center">
                    <p>Zitel Financials Location</p>
                    <h2>Find Us on Map</h2>
                </div>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897.1234567890123!2d-80.4922!3d43.4516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf6ad02edccff%3A0xdd9df3e0b9c2701e!2s741%20King%20St%20W%2C%20Kitchener%2C%20ON%20N2G%200E9!5e0!3m2!1sen!2sca!4v1647881234567!5m2!1sen!2sca" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- Find Us on Map End -->

        <!-- Footer Start -->
            <?php
                include "footer.php";
            ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- EmailJS -->
        <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script>
            (function() {
                emailjs.init("YOUR_PUBLIC_KEY"); // Add your EmailJS public key here
            })();
        </script>
        
        <!-- Contact Javascript File -->
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script>
        $(document).ready(function() {
            // Check for URL parameters on page load
            const urlParams = new URLSearchParams(window.location.search);
            const error = urlParams.get('error');
            const success = urlParams.get('success');
            
            if (success === '1') {
                $('#successMessage').html('Your message has been sent. Thank you!');
                $('#successMessage').show();
            } else if (error) {
                let errorMessage = '';
                switch(error) {
                    case 'method':
                        errorMessage = 'Invalid request method. Please try again.';
                        break;
                    case 'missing':
                        const fields = urlParams.get('fields').split(',');
                        errorMessage = 'Please fill in all required fields: ' + fields.join(', ');
                        break;
                    case 'email':
                        errorMessage = 'Please enter a valid email address.';
                        break;
                    case 'mail':
                        errorMessage = 'Failed to send message. Please try again later.';
                        break;
                    default:
                        errorMessage = 'An error occurred. Please try again.';
                }
                $('#errorMessage').html(errorMessage);
                $('#errorMessage').show();
            }
            
            // Clear success message when name field is focused
            $("#name").focus(function() {
                $('#successMessage').html('');
            });
        });
        </script>
    </body>
</html>
