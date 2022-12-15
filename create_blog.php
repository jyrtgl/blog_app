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
        Create Post
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "blog_function.php";
    ?>
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
                    <li><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div>
            <h2>Create a Post!</h2><br>
        </div>
        <form action="blog_function.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['user']['username']; ?>">
            <div class="row mb-3">
                <input type="text" class="form-control" name="post_title" placeholder="Enter Title">
            </div>
            <div class="row mb-3">
                <input type="text" class="form-control" name="post_content" placeholder="Enter Content">
            </div>
            <button type="submit" class="btn btn-success" name="save">POST</button>
        </form>
    </div>
</body>

</html>