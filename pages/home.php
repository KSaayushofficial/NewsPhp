<?php
session_start();
require_once('../connection.php'); // Adjust path to your config file

// Fetch all blogs with their gallery images
$blogs = mysqli_query($conn, "SELECT * FROM tbl_blog ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Blog</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .blog-card {
            transition: transform 0.3s;
            margin-bottom: 30px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .blog-card:hover {
            transform: translateY(-10px);
        }
        .blog-img {
            height: 250px;
            object-fit: cover;
        }
        .gallery-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 5px;
            margin-bottom: 5px;
            cursor: pointer;
            border: 2px solid #fff;
            transition: transform 0.3s;
        }
        .gallery-thumbnail:hover {
            transform: scale(1.1);
            border-color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Latest Blog Posts</h1>
        
        <div class="row">
            <?php if (mysqli_num_rows($blogs) > 0): ?>
                <?php while ($blog = mysqli_fetch_assoc($blogs)): ?>
                    <?php 
                    // Get gallery images for this blog
                    $gallery = mysqli_query($conn, "SELECT * FROM tbl_blog_gallery WHERE blog_id = '{$blog['id']}'");
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card blog-card h-100">
                            <?php if ($blog['image']): ?>
                                <img src="../uploads/<?= $blog['image'] ?>" class="card-img-top blog-img" alt="<?= htmlspecialchars($blog['title']) ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($blog['title']) ?></h5>
                                <p class="card-text"><?= nl2br(htmlspecialchars(substr($blog['description'], 0, 150))) ?>...</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <?php if (mysqli_num_rows($gallery) > 0): ?>
                                    <div class="d-flex flex-wrap">
                                        <?php while ($image = mysqli_fetch_assoc($gallery)): ?>
                                            <img src="../uploads/<?= $image['name'] ?>" class="gallery-thumbnail" 
                                                 data-bs-toggle="modal" data-bs-target="#galleryModal"
                                                 onclick="showImageInModal('<?= $image['name'] ?>')">
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <a href="blog_detail.php?id=<?= $blog['id'] ?>" class="btn btn-primary mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-info">No blogs found.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Image Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showImageInModal(imageName) {
            document.getElementById('modalImage').src = '../uploads/' + imageName;
        }
    </script>
</body>
</html>