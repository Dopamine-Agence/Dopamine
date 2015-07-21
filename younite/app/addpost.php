<?php
  
  $return = array();

  $address=$_POST["inputAddress"];
  $lat=$_POST["inputLat"];
  $lng=$_POST["inputLng"];
  $title=$_POST["inputTitle"];
  $content=$_POST["inputContent"];
  $tags=$_POST["inputTags"];
  if(isset($_FILES['inputPhoto']) && !empty($_FILES['inputPhoto'])){
    $photo=$_FILES['inputPhoto'];
  }

  if(isset($_POST["inputAddress"]) && !empty($_POST["inputAddress"])) {

        include "connect.php";
        $address = mysqli_real_escape_string($connect,$address);
        $lat = mysqli_real_escape_string($connect,$lat);
        $lng = mysqli_real_escape_string($connect,$lng);
        $title = mysqli_real_escape_string($connect,$title);     
        $content = mysqli_real_escape_string($connect,$content);     
        $tags = mysqli_real_escape_string($connect,$tags);
        if(isset($_FILES['inputPhoto']) && !empty($_FILES['inputPhoto'])){
          $photo = upload("inputPhoto","photo/",array("png","jpg","gif","bmp"),10240,array(500,500));
        }else{
          $photo = NULL;
        }

        $sql = "INSERT INTO posts (address, lat, lng, title, content, tags, photo) VALUES ('". $address ."','". $lat ."','". $lng ."','". $title ."','". $content ."','". $tags ."','". $photo ."')";

        mysqli_query($connect, $sql) or die (mysqli_error());
      
      $return["success"]["ok"] = "Ceci a été posté avec succès";
  }
  elseif(!isset($_POST["inputAddress"]) || empty($_POST["inputAddress"])) {
    $return["errors"]["wrongAddress"] = "Mauvaise adresse!";
  }

  echo json_encode($return);



// PHOTO UPLOAD MON GARS


function upload($index,$destination,$extension=false,$maxsize=false,$size=false)

{
    // if(empty($_FILES[$index]) || $_FILES[$index] ["error"] > 0)
    // {
    //  $return["errors"]["empty"] = "Une erreur est survenue pendant l'upload";
    //   die();
    // }

    $ext = strtolower(substr(strrchr($_FILES[$index] ["name"], "."), 1));
    if ($extension != false && !in_array($ext, $extension))
    {
      $return["errors"]["wrongExt"] = "Mauvaise extension";
    }

    $dimension = getimagesize($_FILES[$index] ['tmp_name']);
    if($dimension[0] > $size[0] || $dimension[1] > $size[1] )
    {
      $return["errors"]["wrongSize"] = "Mauvaise dimension";
    }

    $file_name  = $_FILES[$index]['tmp_name'];
    $file_url   = $destination.mt_rand(0,100)."-".$_FILES[$index]['name'];

    if(move_uploaded_file($file_name, $file_url))
    {
      return $file_url;
    }
    else {
      $return["errors"]["errors"] = "erreur mon gars";
    }
}


// RESIZE :(

// if(isset($_POST['ok'])) {
//   move_uploaded_file($file_name, $file_url);
//   include("resize.php");
//   $target = $_FILES[$index]['name'];
//   $new = "resize_".$target;
//   $type = $_FILES[$index]['type'];
//   $w = 80;
//   $h = 80;
//   resize($target,$new,$w,$h,$type);
//   echo "<img src='".$target."' title='".$target."'/>";
//   echo "<img src='".$new."' title='".$new."'/>";
// }

?>          