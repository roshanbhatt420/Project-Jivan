<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jiivan</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    
    <div class="container">
      <div class="logo">जीवन</div>
      <nav>
        <ul class="nav-links">
          <li><a href="home">Home</a></li>
          <li><a href="post.php">Donate Blood</a></li>
          <li><a href="stories.php">Stories</a></li>
          <?php
          if (!isset($_SESSION['session_id'])) {
              echo "<li><a href='sign.php'>LogIn/Sign Up</a></li>";
          }
          else {
              echo "<li><a href='logout.php'>Logout</a></li>";
          }
          ?>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="profile.php">Profile</a></li>
        </ul>
        <div class="mobile-menu-icon">&#9776;</div>
      </nav>
    </div>
  </header>
  <section class="hero">
    <div class="container">
      <h1>Give the Gift of Life.</h1>
      <p>Your blood can save lives.</p>
      <?php
      if (!isset($_SESSION['session_id'])) {
          echo "<a href='sign.php' class='btn primary-btn'>Sign Up to Donate</a>";
      }
      else {
          echo "<a href='need.php' class='btn primary-btn'>I Need Blood</a>";
      }
      ?>
    </div>
  </section>

  <main>
    <section class="overview">
      <div class="container">
        <h2>Why Donate Blood?</h2>
        <p>Blood donation is a vital way to save lives. Every donation can help up to three people in need of blood. Join us in making a difference.</p>
      </div>
    </section>

    <section class="news-blogs">
      <div class="container">
        <h2>Latest News & Blogs</h2>
        <div class="blog-preview">
          <h3><a href="whyblood.php">Understanding the Importance of Blood Donation</a></h3>
          <p>Learn why blood donation is crucial and how you can help.</p>
        </div>
      </div>
    </section>
    <section class="famous-stories">
      <div class="container">
        <h2>Famous Stories</h2>
        <div class="story">
          <h3>John's Life-Saving Experience</h3>
          <p>John shares his story of how blood donation saved his life during a critical surgery.</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="quick-links">
        <a href="privacy.php">Privacy Policy</a> | <a href="privacy.php">Terms of Service</a>
      </div>
      <div class="contact-info">
        <p>Contact Us: +977 9876767676 | info@blooddonate.com</p>
      </div>
    </div>
  </footer>

  <script>
    document.querySelector('.mobile-menu-icon').addEventListener('click', () => {
      document.querySelector('.nav-links').classList.toggle('active');
    });
  </script>
  <?php
  ?>
</body>
</html>