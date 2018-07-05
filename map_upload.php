<?php
// get upload file extention
function get_extension($file) {
   $extension = end(explode(".", $file));
   return $extension ? $extension : false;
}

echo $_FILES["map_img"]["name"];

if($_FILES["map_img"]["name"]){
  $origin_name=basename($_FILES["map_img"]["name"]);
  $origin_extention=@get_extension(basename($_FILES["map_img"]["name"]));

  $date=date_create();
  $setfilename=date_timestamp_get($date);

  $target_dir = "uploads/map_img/";
  $target_file = $target_dir.$setfilename.".".$origin_extention;

  $areaname=$_POST['areaname'];
  $latitude=$_POST['latitude'];
  $longitude=$_POST['longitude'];


//database connection

  $conn = new mysqli('localhost', 'root', '', 'chat');
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO gmap (areaname, imgpath, latitude, longitude)
  VALUES ('$areaname', '$target_file',$latitude,$longitude)";

  if ($conn->query($sql) === TRUE) {
    //  echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();


  echo $sql;
}

//echo $sql;


if (move_uploaded_file($_FILES["map_img"]["tmp_name"], $target_file)) {
  //  echo "The file ". basename( $_FILES["map_img"]["name"]). " has been uploaded.";
   echo "<script>alert('정확히 등록되였습니다!')</script>";
 } else {
    echo "Sorry, there was an error uploading your file.";
 }

header('Location: index.php?req=res')


// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["map_img"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["map_img"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
     //
     // if (move_uploaded_file($_FILES["map_img"]["tmp_name"], $target_file)) {
     //  echo "The file ". basename( $_FILES["map_img"]["name"]). " has been uploaded.";
     // } else {
     //   echo "Sorry, there was an error uploading your file.";
     // }
//}

//dbconnect





//
// $query =
//


?>
