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
                        <h1>A Bookkeeping that works as <br> hard as you do!</h1>
                        <p>Let's handle your <span>BOOKKEEPING</span></p>
                        <div class="hero-buttons">
                            <a href="https://cal.com/zitel/consultation" class="btn btn-primary" target="_blank">Book Appointment</a>
                            <a href="contact" class="btn btn-secondary">Send a Mail</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slide" style="background-image: url('img/carousel-2.jpg');">
                    <div class="hero-content">
                        <h1>A Bookkeeping that works as <br> hard as you do!</h1>
                        <p>Let's handle your <span>TAX PREPARATION & FILING</span></p>
                        <div class="hero-buttons">
                        <a href="https://cal.com/zitel/consultation" class="btn btn-primary" target="_blank">Book Appointment</a>
                        <a href="contact" class="btn btn-secondary">Send a Mail</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slide" style="background-image: url('img/carousel-3.jpg');">
                    <div class="hero-content">
                        <h1>A Bookkeeping that works as <br> hard as you do!</h1>
                        <p>Let's handle your <span>PAYROLL</span></p>
                        <div class="hero-buttons">
                        <a href="https://cal.com/zitel/consultation" class="btn btn-primary" target="_blank">Book Appointment</a>
                        <a href="contact" class="btn btn-secondary">Send a Mail</a>
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
                                we set out to deliver bookkeeping and accounting services that are not only accurate and compliant, but also flexible, approachable, and tailored to each client's needs.
                                
                            </p>
                            <p>
                                 Our team brings deep industry experience, 
                                a commitment to integrity, and a passion for helping business owners make informed, confident decisions....
                            </p>
                            <a class="btn" href="about">Learn More +</a>
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
                    <p>We are competents</p>
                    <h2>Our Services</h2>
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
                            and mid-sized businesses with the reliable, personalized financial services 
                            they need to grow and upscale with confidence.
                        </p>
                        <div class="row counters">
                            <div class="col-6"><i class="fa fa-users"></i><div class="counters-text"><h2 data-toggle="counter-up">90</h2>%<p>Team's Experience</p></div></div>
                            <div class="col-6"><i class="fa fa-check"></i><div class="counters-text"><h2 data-toggle="counter-up">10</h2><p>Number of Team</p></div></div>
                            <div class="col-6"><i class="fa fa-running"></i><div class="counters-text"><h2 data-toggle="counter-up">14</h2><p>Team's Running Projects</p></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>What Clients say about us</p>
                    <h2>Our customers are satisfied with our services</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <!-- <img src="img/testimonial-1.jpg" alt="Image"> -->

                        </div>
                        <div class="testimonial-text">
                            <p>
                                I was on the verge of upscalling my bussiness, hence needed a reputable organization to fill
                                my taxes correctly, Zitel Finacials did a great job. I will galdly recommend them.
                            </p>
                            <h2>Joy Miles</h2>
                            <h3>Business Owner</h3>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                             <!-- <img src="img/testimonial-2.jpg" alt="Image"> -->
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Zitel Financials has help upped my business returns by effective documentation and financial reporting, helping us channel
                                resources to the right places
                            </p>
                            <h2>Jake </h2>
                            <h3>Resturant Owner</h3>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                         <!-- <img src="img/testimonial-3.jpg" alt="Image"> -->
                        </div>
                        <div class="testimonial-text">
                            <p>
                                I am particularly exicted because i can now outsource my tax filing to a reputatable comapny and focus on actual 
                                running of my business.
                            </p>
                            <h2>Justin</h2>
                            <h3>Business Owner</h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Advisors</p>
                    <h2>Our Professional Consulting Team</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Chibundo Adaobi Agbaim </h2>
                                <p>Founder & CEO</p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/adaobi-chibundo-agbaim/?originalSubdomain=ca"><i class="fab fa-linkedin-in" style="color: #092A49; animation: pulse 2s infinite;" target="_blank"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Advisor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-linkedin-in" style="color: #092A49; animation: pulse 2s infinite;"></i></a>
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
                            <form id="contactForm" name="sentMessage" method="POST" action="send-email.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Your Subject *" required="required" data-validation-required-message="Please enter a subject.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="successMessage" class="alert alert-success" style="display: none;"></div>
                                        <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>
                                        <div class="g-recaptcha" data-sitekey="6Ld19FsrAAAAAE-_GzHzxwK00_vtTPDGkY3rCkZj"></div>
                                        <div>
                                            <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                        </div>
                                    </div>
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
                    <a href="blog" class="btn btn-primary" style="background-color: #092A49">Read Blog</a>
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
        
        <!-- Add reCAPTCHA script -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Custom Contact Form JavaScript -->
        <script src="js/contact-form.js"></script>

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
                $('.blog-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive:{
                        0:{
                            items: 1
                        },
                        768:{
                            items: 2
                        }
                    }
                });
            });
        </script>
    </body>
</html>
