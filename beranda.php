<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="beranda.php" class="logo">Matematika</a>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Hello <?php
         if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
            while($row=mysqli_fetch_array($query)){
               echo $row['firstName'].' '.$row['lastName'];
            }
         }
         ?>
         </h3>
         <p class="role">student</p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="logout.php" class="option-btn">logout</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">student</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="beranda.php"><i class="fas fa-home"></i><span>Beranda</span></a>
      <a href="video.php"><i class="	fa fa-video-camera"></i><span>Video</span></a>
      <a href="materi.php"><i class="fa fa-book"></i><span>Materi</span></a>
      <a href="quiz.php"><i class="fa fa-pencil"></i><span>Quiz</span></a>
   </nav>

</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Apa itu Matematika?</h3>
         <p>Matematika adalah ilmu yang mempelajari pola, struktur, ruang, besaran, dan perubahan melalui penggunaan simbol dan aturan logika. Sederhananya, matematika adalah alat untuk memahami dan menjelaskan berbagai fenomena, baik yang abstrak maupun nyata, dengan cara yang terstruktur dan logis.</p>
         <a href="materi.php" class="inline-btn">Materi</a>
         <a href="video.php" class="inline-btn">Video</a>
         <a href="quiz.php" class="inline-btn">Quiz</a>
      </div>

   </div>

</section> 











<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>