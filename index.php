<?php
include('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Home
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MiniBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li><a class="nav-link">Hi <?php echo $_SESSION['user']['username']; ?>!</a></li>
                    <li><a class="nav-link" href="index.php">Home</a></li>
                    <li><a class="nav-link" href="index.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav><br><br>
    <div class="container border border-success p-2 border-opacity-10">
        <?php
        $username = $_SESSION['user']['username'];
        $result = $db->query("SELECT * FROM blogs WHERE username LIKE '%$username' ORDER BY date_posted DESC");
        ?>
        <?php
        while ($row = $result->fetch_assoc()) { ?>
            <div>
                <h2><?php echo $row['post_title']; ?></h2>
            </div>
            <div>
                <h5><?php echo $row['post_content']; ?></h5>
            </div>
            <div>
                <?php echo $row['date_posted']; ?>
            </div>
            <div>
                <a href="edit_blog.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                <a href="blog_function.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </div>
        <?php } ?>
    </div>
    <br>
    <div class="container">
        <form method="post" action="registration.php">
            <a class="btn btn-success" href="create_blog.php">Create New POST</a>
        </form>
    </div>
</body>

</html>