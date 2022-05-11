<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$upload = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $upload = 1;
  } else {
    echo "File is not an image.";
    $upload = 0;
  }
}


if (file_exists($target_file)) {
  echo " file already exists.";
  $upload = 0;
}


if ($_FILES["fileUpload"]["size"] > 200000) {
  echo " your file is too large.";
  $upload= 0;
}


if($imageFileType != "png") {
  echo "only PNG  files are allowed.";
  $upload = 0;
}


if ($upload== 0) {
  echo " your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
  } else {
    echo " there was an error uploading your file.";
  }
}
?>