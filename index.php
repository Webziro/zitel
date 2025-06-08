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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            .carousel-item {
                height: 500px;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .typing-text {
                color: #3E64D7;
                font-weight: bold;
            }
            .service-item {
                transition: all 0.3s ease;
                overflow: hidden;
            }
            .service-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            .service-item img {
                transition: all 0.5s ease;
                transform: translateX(0);
            }
            .service-item:hover img {
                transform: translateX(10px);
            }
            .fact {
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .fact .container {
                max-width: 1000px;
                margin: 0 auto;
                padding: 0 15px;
            }
            .fact .row {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }
            .fact-item {
                transition: all 0.3s ease;
                overflow: hidden;
                text-align: center;
                padding: 20px;
                margin: 0 auto;
                width: 100%;
                max-width: 250px;
            }
            .fact-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            .fact-item img {
                transition: all 0.5s ease;
                transform: translateX(0);
                margin-bottom: 15px;
                display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 80px;
            }
            .fact-item:hover img {
                transform: translateX(10px);
            }
            .fact-item h2 {
                margin: 0;
                font-size: 20px;
                color: #3E64D7;
            }
            .carousel {
                position: relative;
                width: 100%;
                height: 100vh;
                min-height: 500px;
                background: #000000;
            }
            .carousel .container-fluid {
                position: relative;
                height: 100%;
                padding: 0;
            }
            .carousel .carousel-item {
                position: relative;
            }
            .carousel .carousel-item img {
                display: block;
            }
            .carousel .carousel-btn .btn {
                margin: 0 10px;
            }
            @keyframes pulse {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.1);
                }
                100% {
                    transform: scale(1);
                }
            }
        </style>
    </head>

    <body>
        <!-- Top Bar Start -->
            <?php
                include "header.php";
            ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
            
        <!-- Nav Bar End -->

        <!-- Hero Section Start -->
        <div class="hero">
            <div class="hero-slider">
                <div class="hero-slide" style="background-image: url('img/carousel-1.jpg');">
                    <div class="hero-content">
                        <h1>Focus on your Growth</h1>
                        <p>Let's Zitel handle your <span>BOOKKEEPING</span></p>
                        <div class="hero-buttons">
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                            <a href="#" class="btn btn-secondary">Send a Mail</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slide" style="background-image: url('img/carousel-2.jpg');">
                    <div class="hero-content">
                        <h1>Focus on your Growth</h1>
                        <p>Let's handle your <span>TAX PREPARATION & FILLING</span></p>
                        <div class="hero-buttons">
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                            <a href="#contact" class="btn btn-secondary">Send a Mail</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slide" style="background-image: url('img/carousel-3.jpg');">
                    <div class="hero-content">
                        <h1>Focus on your Growth</h1>
                        <p>Let's handle your <span>PAYROLL</span></p>
                        <div class="hero-buttons">
                            <a href="#" class="btn btn-primary">Book Appointment</a>
                            <a href="#" class="btn btn-secondary">Send a Mail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-nav">
                <button class="hero-nav-prev"><i class="fa fa-angle-left"></i></button>
                <button class="hero-nav-next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <!-- Hero Section End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
        
        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <i class="fas fa-users fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            <h2 style="color: #092A49;">Qualified Team</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <i class="fas fa-trophy fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            <h2 style="color: #092A49;">100% Success</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <i class="fas fa-smile fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            <h2 style="color: #092A49;">100% Satisfaction</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="img/about-2.jpg" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="img/about-1.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>We are Zitel Financials</p>
                            <h2>BEST FINANCIAL ADVISOR FOR YOUR <span class="typing-text"></span> </h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Recognizing the unique challenges small businesses face, whether you're just starting out or scaling up, 
                                we set out to deliver bookkeeping and accounting services that are not only accurate and compliant, 
                                
                            </p>
                            <p>
                                but also flexible, approachable, and tailored to each client's needs. Our team brings deep industry experience, 
                                a commitment to integrity, and a passion for helping business owners make informed, confident decisions....
                            </p>
                            <a class="btn" href="about.php">Learn More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <p>Zitel Consulting Services</p>
                    <h2>Our Consulting Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-book fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            </div>
                            <h3 style="color: #092A49;">Bookkeeping</h3>
                            <p>
                                We handle your day-to-day financial transactions, ensuring your books are always up-to-date and accurate.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-calculator fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            </div>
                            <h3 style="color: #092A49;">Tax Preparation</h3>
                            <p>
                                Expert tax preparation services to ensure compliance and maximize your returns.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-chart-line fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            </div>
                            <h3 style="color: #092A49;">Financial Planning</h3>
                            <p>
                                Strategic financial planning to help your business grow and achieve its goals.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-file-invoice-dollar fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            </div>
                            <h3 style="color: #092A49;">Payroll Services</h3>
                            <p>
                                Comprehensive payroll management to ensure your employees are paid accurately and on time.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-handshake fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            </div>
                            <h3 style="color: #092A49;">Business Advisory</h3>
                            <p>
                                Expert advice to help you make informed business decisions and drive growth.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-file-alt fa-3x" style="color: #092A49; animation: pulse 2s infinite;"></i>
                            </div>
                            <h3 style="color: #092A49;">Financial Reporting</h3>
                            <p>
                                Clear and comprehensive financial reports to help you understand your business performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="feature-img"><img src="img/business-man.png" alt="Image"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>We are Different</p>
                            <h2>Why Choose Us?</h2>
                        </div>
                        <p>Zitel Financials Inc. was founded with one mission in mind: to provide small 
                            and mid-sized businesses with the reliable, personalized financial support 
                            they need to grow with confidence.
                        </p>
                        <div class="row counters">
                            <div class="col-6"><i class="fa fa-users"></i><div class="counters-text"><h2 data-toggle="counter-up">200</h2><p>Our Clients</p></div></div>
                            <div class="col-6"><i class="fa fa-check"></i><div class="counters-text"><h2 data-toggle="counter-up">300</h2><p>Completed Projects</p></div></div>
                            <div class="col-6"><i class="fa fa-running"></i><div class="counters-text"><h2 data-toggle="counter-up">400</h2><p>Running Projects</p></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <p>What Clients say about us</p>
                    <h2>Our customers are satisfied with our services</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <p>
                            Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non velit. Vivamus vehicula finibus
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <p>Meet Our Advisors</p>
                    <h2>Our Professional Consulting Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Founder & CEO</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-facebook-f" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-instagram" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Chef Executive</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-facebook-f" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-instagram" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Chef Advisor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-facebook-f" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-instagram" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Advisor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-facebook-f" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                    <a href=""><i class="fab fa-instagram" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <p>Get In Touch</p>
                    <h2>Talk to Us</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Visit Our Office</h3>
                                <p>741 King Str. W. Kitchener, ON N2G 0E9</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for futher enquires</h3>
                                <p>(437) 559-5707</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Send us a Mail</h3>
                                <p> info@zitelfinancials.ca</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="message" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
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


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Consulting Blog</p>
                    <h2>Latest From Our Consulting Blog</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <?php
                    require_once 'config/database.php';
                    
                    // Fetch only 3 latest published blog posts
                    $sql = "SELECT p.*, u.username as author_name 
                            FROM blog_posts p 
                            LEFT JOIN users u ON p.author_id = u.id 
                            WHERE p.status = 'published' 
                            AND (p.publish_date IS NULL OR p.publish_date <= NOW())
                            ORDER BY p.created_at DESC 
                            LIMIT 3";
                    
                    $result = mysqli_query($conn, $sql);
                    
                    while($row = mysqli_fetch_assoc($result)) {
                        $image_path = !empty($row['image_path']) ? $row['image_path'] : 'img/blog-1.jpg';
                        ?>
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title"><?php echo htmlspecialchars($row['title']); ?></h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href=""><?php echo htmlspecialchars($row['category']); ?></a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p><?php echo date('d-M-Y', strtotime($row['created_at'])); ?></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        <?php 
                                        echo htmlspecialchars(substr(strip_tags($row['content']), 0, 150)) . '...'; 
                                        ?>
                                    </p>
                                    <a class="btn" href="more.php?id=<?php echo $row['id']; ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="text-center mt-4">
                    <a href="blog.php" class="btn btn-primary">Read Blog</a>
                </div>
            </div>
        </div>
        <!-- Blog End -->


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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <!-- Hero Slider Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slides = document.querySelectorAll('.hero-slide');
                const prevBtn = document.querySelector('.hero-nav-prev');
                const nextBtn = document.querySelector('.hero-nav-next');
                let currentSlide = 0;
                let slideInterval;

                // Initialize first slide
                slides[0].classList.add('active');

                // Function to show a specific slide
                function showSlide(index) {
                    // Remove active class from all slides
                    slides.forEach(slide => slide.classList.remove('active'));
                    
                    // Add active class to current slide
                    slides[index].classList.add('active');
                    
                    // Update current slide index
                    currentSlide = index;
                }

                // Function to show next slide
                function nextSlide() {
                    let next = currentSlide + 1;
                    if (next >= slides.length) {
                        next = 0;
                    }
                    showSlide(next);
                }

                // Function to show previous slide
                function prevSlide() {
                    let prev = currentSlide - 1;
                    if (prev < 0) {
                        prev = slides.length - 1;
                    }
                    showSlide(prev);
                }

                // Start automatic slideshow
                function startSlideshow() {
                    slideInterval = setInterval(nextSlide, 5000);
                }

                // Stop automatic slideshow
                function stopSlideshow() {
                    clearInterval(slideInterval);
                }

                // Event listeners for navigation buttons
                prevBtn.addEventListener('click', () => {
                    stopSlideshow();
                    prevSlide();
                    startSlideshow();
                });

                nextBtn.addEventListener('click', () => {
                    stopSlideshow();
                    nextSlide();
                    startSlideshow();
                });

                // Start the slideshow
                startSlideshow();

                // Typing animation
                const words = ['FUTURE', 'BUSINESS', 'SUCCESS'];
                const typingText = document.querySelector('.typing-text');
                let wordIndex = 0;
                let charIndex = 0;
                let isDeleting = false;
                let typingDelay = 100;
                let erasingDelay = 500;
                let newWordDelay = 3000;

                function type() {
                    const currentWord = words[wordIndex];
                    
                    if (isDeleting) {
                        typingText.textContent = currentWord.substring(0, charIndex - 1);
                        charIndex--;
                    } else {
                        typingText.textContent = currentWord.substring(0, charIndex + 1);
                        charIndex++;
                    }

                    if (!isDeleting && charIndex === currentWord.length) {
                        isDeleting = true;
                        typingDelay = newWordDelay;
                    } else if (isDeleting && charIndex === 0) {
                        isDeleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                        typingDelay = 100;
                    }

                    setTimeout(type, isDeleting ? erasingDelay : typingDelay);
                }

                // Start the typing animation
                type();
            });
        </script>

        <!-- Initialize Owl Carousel -->
        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 0,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    navText: [
                        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                    ]
                });
            });
        </script>
    </body>
</html>
