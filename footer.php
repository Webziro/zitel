<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Visit Our Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>741 King Str. W. Kitchener, ON N2G 0E9</p>
                                    <p><i class="fa fa-phone-alt"></i>(437) 559-5707 | (647) 916-7741</p>
                                    <p><i class="fa fa-envelope"></i>info@zitelfinancials.ca</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Our Services</h2>
                                    <a href="#">Bookkeeping Services</a>
                                    <a href="#">Payroll Services</a>
                                    <a href="#">Tax Preparation and Filing</a>
                                    <a href="#">Consultation & Financial Reporting</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="blog.php">Blog</a>
                                <a href="#">Book Appiontment</a>
                                <a href="">Terms of use</a>
                                <a href="">Privacy policy</a>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Zitel Financials Inc.</a> <?php echo date('Y'); ?>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Crafted with <span class="heart">&#x2665;</span> <a href="https://cyrextech.org">Cyrex Tech</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="js/cookie-policy.js"></script>

        <!-- Initialize Owl Carousel -->
        <script>
            $(document).ready(function(){
                $('.testimonials-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    smartSpeed: 1000,
                    responsive: {
                        0:{
                            items:1
                        },
                        768:{
                            items:2
                        },
                        992:{
                            items:3
                        }
                    }
                });
            });
        </script>
    </body>
</html>