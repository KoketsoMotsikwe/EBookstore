<?php
include 'dbconn.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login.php');
   exit();
}

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `book_requests` WHERE id = '$delete_id'") or die('query failed');
   header('location:user_messages.php');
   exit();
}

if (isset($_POST['reply'])) {
   $message_id = $_POST['message_id'];
   $admin_reply = mysqli_real_escape_string($conn, $_POST['admin_reply']);

   // Update the admin reply in the database
   mysqli_query($conn, "UPDATE `book_requests` SET admin_reply = '$admin_reply' WHERE id = '$message_id'") or die('query failed');
   header('location:user_messages.php');
   exit();
}

if (isset($_GET['approve'])) {
   $approve_id = $_GET['approve'];
   mysqli_query($conn, "UPDATE `book_requests` SET approved = 1 WHERE id = '$approve_id'") or die('query failed');
   header('location:user_messages.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title"> User Messages </h1>

   <div class="box-container">
   <?php
      $select_request = mysqli_query($conn, "SELECT * FROM `book_requests`") or die('query failed');
      if (mysqli_num_rows($select_request) > 0) {
         while ($fetch_request = mysqli_fetch_assoc($select_request)) {
            $request_id = $fetch_request['id'];
   ?>
            <div class="box">
               <p> Book Title: <span><?php echo $fetch_request['title']; ?></span> </p>
               <p> Author: <span><?php echo $fetch_request['author']; ?></span> </p>
               <div class="book-image">
                  <img src="<?php echo $fetch_request['image']; ?>" alt="Book Image">
               </div>
               <?php if (isset($fetch_request['admin_reply'])) { ?>
                  <p> Admin Reply: <span><?php echo $fetch_request['admin_reply']; ?></span></p>
               <?php } ?>
               <?php if (!isset($fetch_request['admin_reply'])) { ?>
                  <form action="user_messages.php" method="post" class="reply-form">
                     <input type="hidden" name="message_id" value="<?php echo $request_id; ?>">
                     <textarea name="admin_reply" placeholder="Enter your reply" required></textarea>
                     <input type="submit" name="reply" value="Reply" class="reply-btn">
                  </form>
               <?php } ?>
               <a href="admin_users.php?delete=<?php echo $request_id; ?>" onclick="return confirm('Delete this book request?');" class="delete-btn">Decline</a>
               <?php if (!$fetch_request['approved']) { ?>
                  <a href="admin_users.php?approve=<?php echo $request_id; ?>" class="delete-btn">Approve</a>
               <?php } ?>
            </div>
   <?php
         }
      } else {
         echo '<p class="empty">You have no book requests!</p>';
      }
   ?>
   </div>

</section>

<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>
