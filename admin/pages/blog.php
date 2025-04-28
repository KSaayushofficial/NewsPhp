<?php

require_once('../../connection.php'); // Adjust path to your config file

// Initialize variables
$title = $description = $mainImage = '';
$error = $success = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    // Validate inputs
    if (empty($title) || empty($description)) {
        $error = "Title and description are required!";
    } else {
        // Handle main image upload
        if ($_FILES['main_image']['error'] == 0) {
            $targetDir = "../../uploads/";
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $mainImage = time() . '_' . basename($_FILES['main_image']['name']);
            $targetFile = $targetDir . $mainImage;
            
            // Check if image file is valid
            $check = getimagesize($_FILES['main_image']['tmp_name']);
            if ($check !== false) {
                if (move_uploaded_file($_FILES['main_image']['tmp_name'], $targetFile)) {
                    // Successfully uploaded
                } else {
                    $error = "Sorry, there was an error uploading your file.";
                }
            } else {
                $error = "File is not an image.";
            }
        } else {
            $error = "Please upload a featured image.";
        }
        
        if (empty($error)) {
            // Insert into tbl_blog
            $sql = "INSERT INTO tbl_blog (Title, Image, Description) VALUES ('$title', '$mainImage', '$description')";
            if (mysqli_query($conn, $sql)) {
                $blog_id = mysqli_insert_id($conn);
                
                // Handle gallery images
                if (!empty($_FILES['gallery_images']['name'][0])) {
                    foreach ($_FILES['gallery_images']['tmp_name'] as $key => $tmp_name) {
                        if ($_FILES['gallery_images']['error'][$key] == 0) {
                            $galleryImage = time() . '_' . basename($_FILES['gallery_images']['name'][$key]);
                            $targetFile = $targetDir . $galleryImage;
                            if (move_uploaded_file($tmp_name, $targetFile)) {
                                mysqli_query($conn, "INSERT INTO tbl_blog_gallery (blog_id, name) VALUES ('$blog_id', '$galleryImage')");
                            }
                        }
                    }
                }
                
                $success = "Blog added successfully!";
                // Reset form
                $title = $description = '';
            } else {
                $error = "Database error: " . mysqli_error($conn);
            }
        }
    }
}

// Fetch existing blogs - with error handling
$blogs_result = mysqli_query($conn, "SELECT * FROM tbl_blog ORDER BY id DESC");
if ($blogs_result === false) {
    die("Database error: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .gallery-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .gallery-preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        .table-img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-container">
                    <h2 class="text-center mb-4"><i class="fas fa-blog me-2"></i>Add New Blog</h2>
                    
                    <?php if (!empty($success)): ?>
                        <div class="alert alert-success"><?= $success ?></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($title) ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="main_image" class="form-label">Featured Image</label>
                            <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*" required>
                            <small class="text-muted">Recommended size: 1200x630 pixels</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required><?= htmlspecialchars($description) ?></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="gallery_images" class="form-label">Gallery Images</label>
                            <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple accept="image/*">
                            <div class="gallery-preview" id="galleryPreview"></div>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save me-2"></i>Submit</button>
                        </div>
                    </form>
                </div>
                
                <div class="mt-5">
                    <h3 class="mb-4">Existing Blogs</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($blog = mysqli_fetch_assoc($blogs_result)): ?>
                                <tr>
                                    <td><?= $blog['id'] ?></td>
                                    <td><?= htmlspecialchars($blog['title']) ?></td>
                                    <td>
                                        <?php if (!empty($blog['image'])): ?>
                                            <img src="../../uploads/<?= htmlspecialchars($blog['image']) ?>" class="table-img img-thumbnail">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="edit_blog.php?id=<?= $blog['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="delete_blog.php?id=<?= $blog['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preview gallery images before upload
        document.getElementById('gallery_images').addEventListener('change', function(e) {
            const preview = document.getElementById('galleryPreview');
            preview.innerHTML = '';
            
            for (let i = 0; i < this.files.length; i++) {
                const file = this.files[i];
                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        preview.appendChild(img);
                    }
                    
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
</body>
</html>