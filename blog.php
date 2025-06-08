<?php
require_once 'config/database.php';

// Pagination settings
$posts_per_page = 6;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $posts_per_page;

// Get total number of posts
$total_sql = "SELECT COUNT(*) as count FROM blog_posts WHERE status = 'published' AND (publish_date IS NULL OR publish_date <= NOW())";
$total_result = mysqli_query($conn, $total_sql);
$total_row = mysqli_fetch_assoc($total_result);
$total_posts = $total_row['count'];
$total_pages = ceil($total_posts / $posts_per_page);

// Fetch blog posts with pagination
$sql = "SELECT p.*, u.username as author_name 
        FROM blog_posts p 
        LEFT JOIN users u ON p.author_id = u.id 
        WHERE p.status = 'published' 
        AND (p.publish_date IS NULL OR p.publish_date <= NOW())
        ORDER BY p.created_at DESC 
        LIMIT ? OFFSET ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $posts_per_page, $offset);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>

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
    </head>

    <body class="page">
        <!-- Top Bar Start -->
            <?php 
                include "header.php";
            ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        
        <!-- Nav Bar End -->
        
        
        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Read Our Blog</h5>
                    <h1 class="display-4">Latest Articles</h1>
                </div>
                <div class="row g-5">
                    <?php while($row = mysqli_fetch_assoc($result)): 
                        $image_path = !empty($row['image_path']) ? $row['image_path'] : 'img/blog-1.jpg';
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="img-fluid w-100">
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
                                    <a class="btn btn-primary" href="more.php?id=<?php echo $row['id']; ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <?php if($total_pages > 1): ?>
                <div class="row mt-5">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <?php if($page > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $page-1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                                <?php endfor; ?>

                                <?php if($page < $total_pages): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $page+1; ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php endif; ?>
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
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
