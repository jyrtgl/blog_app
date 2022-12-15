<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Registration
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
                    <li><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <h2>Registration</h2><br>
        </div>
        <div>
            <h5>See the Registration Rules</h5><br>
        </div>
        <div>
            <form method="post" action="registration.php">
                <div class="row mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
                </div>
                <div class="row mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
                </div>
                <div class="row mb-3">
                    <input type="password" class="form-control" name="password_1" placeholder="Enter Password">
                </div>
                <div class="row mb-3">
                    <input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-success" name="register_btn">Sign in</button><br><br>
                <h6>Return to the <a href="login.php">LOGIN PAGE</a></h6>
            </form>
        </div>
        <br><br>
        <?php echo display_error(); ?>
    </div>
</body>

</html>