<?php
include 'dbconn.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location: login.php');
}

if (isset($_POST['sell_submit'])) {
   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $author = mysqli_real_escape_string($conn, $_POST['author']);

   // File upload handling
   $target_dir = "uploaded_img/"; // Directory to store the uploaded images
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Check if the file is an actual image or fake image
   $check = getimagesize($_FILES["image"]["tmp_name"]);
   if ($check !== false) {
      // File is an image
      // Additional validation for the file can be performed here

      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
         // Image uploaded successfully

         // Save the book request details to the database or perform any other necessary actions

         // Example: Insert the book request details into a table
         $insert_query = "INSERT INTO book_requests (title, author, image) VALUES ('$title', '$author', '$target_file')";
         $result = mysqli_query($conn, $insert_query);

         if ($result) {
            // Book request details saved successfully
            $success_message = "Your request to sell the book has been submitted.";
         } else {
            // Error saving the book request details
            $error_message = "Failed to submit the request. Please try again.";
         }
      } else {
         // Error moving the uploaded file
         $error_message = "Failed to upload the image. Please try again.";
      }
   } else {
      // File is not an image
      $error_message = "Invalid image file. Please upload a valid image.";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Contact</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <div class="form-container">
      <form action="" method="post" enctype="multipart/form-data">
         <h3>Request to Sell Book</h3>
         <?php
         if (isset($success_message)) {
            echo '
            <div class="message success">
               <span>' . $success_message . '</span>
               <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
         }

         if (isset($error_message)) {
            echo '
            <div class="message error">
               <span>' . $error_message . '</span>
               <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
         }
         ?>
         <input type="text" name="title" placeholder="Book Title" required class="box">
         <input type="text" name="author" placeholder="Author" required class="box">
         <input type="file" name="image" required class="box">
         <input type="submit" name="sell_submit" value="Submit Request" class="btn">
      </form>
   </div>

</body>

</html>
