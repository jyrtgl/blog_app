<?php
$username = $post_title = $post_content = $search = $date_posted = "";
$id = $rowcount = 0;
$update = false;
$db = new mysqli('localhost', 'root', '', 'blog_app') or die(mysqli_error($mysqli));

//Save records
if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    $date_posted = $_POST['date_posted'];
    $date_posted = date("l jS \of F Y h:i:s A");
    $db->query("INSERT INTO blogs(username,post_title,post_content,date_posted)VALUES('$username','$post_title','$post_content', '$date_posted')");

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location:index.php");
}
//Delete records
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $db->query("DELETE FROM blogs WHERE id=$id");

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");
}

//Edit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $db->query("SELECT * FROM blogs WHERE id=$id");
    $row = $result->fetch_array();
    $username = $row['username'];
    $post_title = $row['post_title'];
    $post_content = $row['post_content'];
    $date_posted = $row['date_posted'];
}

//Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    $date_updated = $_POST['date_updated'];
    $date_updated = date("l jS \of F Y h:i:s A");
    $date_posted = $date_updated;
    $db->query("UPDATE blogs SET username='$username', post_title='$post_title', post_content='$post_content', date_posted='$date_posted', date_updated='$date_updated' WHERE id=$id");

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("location: index.php");
}
