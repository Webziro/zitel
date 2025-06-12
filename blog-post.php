<?php
require_once 'config/database.php';
require_once 'includes/functions.php';

// Get the slug from URL
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$slug = end($segments);

if (empty($slug)) {
    header("Location: blog.php");
    exit;
}

// Fetch the blog post
$sql = "SELECT p.*, u.username as author_name 
        FROM blog_posts p 
        LEFT JOIN users u ON p.author_id = u.id 
        WHERE LOWER(REPLACE(p.title, ' ', '-')) = ? 
        AND p.status = 'published' 
        AND (p.publish_date IS NULL OR p.publish_date <= NOW())";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $slug);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    header("Location: blog.php");
    exit;
}

$post = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo htmlspecialchars($post['title']); ?> - Zitel Financials Inc.</title>
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
        <?php include "header.php"; ?>
        <!-- Top Bar End -->

        <!-- Blog Detail Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-detail">
                            <div class="blog-img">
                                <img src="<?php echo !empty($post['image_path']) ? htmlspecialchars($post['image_path']) : 'img/blog-1.jpg'; ?>" 
                                     alt="<?php echo htmlspecialchars($post['title']); ?>" 
                                     class="img-fluid w-100" style="padding: 30px  30px 30px 0">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title"><?php echo htmlspecialchars($post['title']); ?></h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href=""><?php echo htmlspecialchars($post['category']); ?></a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p><?php echo date('d-M-Y', strtotime($post['created_at'])); ?></p>
                                    <i class="fa fa-user"></i>
                                    <p><?php echo htmlspecialchars($post['author_name']); ?></p>
                                </div>
                                <div class="blog-text">
                                    <?php echo $post['content']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Sidebar -->
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h4 class="widget-title" style="padding-top: 30px">Recent Posts</h4>
                                <?php
                                $recent_sql = "SELECT id, title, created_at 
                                             FROM blog_posts 
                                             WHERE status = 'published' 
                                             AND id != ? 
                                             ORDER BY created_at DESC 
                                             LIMIT 5";
                                $recent_stmt = mysqli_prepare($conn, $recent_sql);
                                mysqli_stmt_bind_param($recent_stmt, "i", $post['id']);
                                mysqli_stmt_execute($recent_stmt);
                                $recent_result = mysqli_stmt_get_result($recent_stmt);
                                ?>
                                <ul class="recent-posts">
                                    <?php while($recent = mysqli_fetch_assoc($recent_result)): 
                                        $recent_slug = generateSlug($recent['title']);
                                    ?>
                                    <li>
                                        <a href="blog-post/<?php echo $recent_slug; ?>">
                                            <?php echo htmlspecialchars($recent['title']); ?>
                                        </a>
                                        <small><?php echo date('d M Y', strtotime($recent['created_at'])); ?></small>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Detail End -->

        <!-- Footer Start -->
        <?php include "footer.php"; ?>
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