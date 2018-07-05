<?php
// get upload file extention
function get_extension($file) {
   $extension = end(explode(".", $file));
   return $extension ? $extension : false;
}


if($_FILES["fileupload"]["name"]){
  $origin_name=basename($_FILES["fileupload"]["name"]);
  $origin_extention=@get_extension(basename($_FILES["fileupload"]["name"]));

  $date=date_create();
  $setfilename=date_timestamp_get($date);

  $target_dir = "uploads/";
  $target_file = $target_dir.$setfilename.".".$origin_extention;

  $filetitle=$_POST['file_title'];
  $filedescription=$_POST['file_discription'];
  $filename=basename($_FILES["fileupload"]["name"]);



//database connection

  $conn = new mysqli('localhost', 'root', '', 'chat');
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO fileupload (filetype, filename, filepath, filetitle, filedescription)
  VALUES ('$origin_extention', '$filename','$target_file','$filetitle','$filedescription')";

  if ($conn->query($sql) === TRUE) {
    //  echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();


  echo $sql;
}



if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
  //  echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
   echo "<script>alert('정확히 등록되였습니다!')</script>";
 } else {
    echo "Sorry, there was an error uploading your file.";
 }

header('Location: index.php')


// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
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
// if ($_FILES["fileupload"]["size"] > 500000) {
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
     // if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
     //  echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
     // } else {
     //   echo "Sorry, there was an error uploading your file.";
     // }
//}

//dbconnect





//
// $query =
//


?>
