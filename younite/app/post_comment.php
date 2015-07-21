<?php
require_once ("connect.php");

if (!empty($_POST["inputPostId"])){

    $posts_id = $_POST['inputPostId'];
    $user = $_POST['inputUser'];
    $comment = mysqli_real_escape_string($connect,$_POST['inputComment']);

    $sql = "INSERT INTO posts_comments (posts_id,user,comment) VALUES (".$posts_id.",'".$user."','".$comment."')";

    $res = mysqli_query($connect, $sql) or die (mysqli_error());

    if($res)
    {
      Header("Location : ".$_SERVER["HTTP_REFERER"]);
      die();
    }
};

?>
