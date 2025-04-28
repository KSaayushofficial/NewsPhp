<?php
require_once "../connection.php";

// Fetch all categories from the 'category' table
$sql = "SELECT * FROM categories ORDER BY Id DESC";
$response = mysqli_query($conn, $sql);

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['Name']);

    if (!empty($name)) {
        $insertQuery = "INSERT INTO categories (Name) VALUES ('$name')";
        if (mysqli_query($conn, $insertQuery)) {
            $successMessage = "Category added successfully!";
        } else {
            $successMessage = "Error adding category: " . mysqli_error($conn);
        }
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="dashboard-card p-3">
                <h2>Add Category</h2>
                <hr>
                <?php if (!empty($successMessage)) : ?>
                    <div class="alert alert-success"> <?= $successMessage; ?> </div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Add Category</button>
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="dashboard-card p-3">
                <h2>Categories List</h2>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($response as $key => $categories) : ?>
                            <tr>
                                <td><?= ++$key; ?></td>
                                <td><?= htmlspecialchars($categories['Name']); ?></td>
                                <td>
                                    <a href="edit_category.php?id=<?= $categories['Id']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <a href="delete_category.php?id=<?= $categories['Id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>