<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/wrlogo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>West Rembo Learning Center</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unkempt:wght@400;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/student/index.css">
</head>
<body>

<!-- Hamburger Toggle Button (Mobile Only) -->
<button class="nav-toggle btn d-md-none" aria-label="toggle navigation">☰</button>

<!-- Overlay for mobile sidebar -->
<div class="overlay"></div>

<!-- Header -->
<header class="d-flex flex-row align-items-center justify-content-between px-4 py-3">
  <h1 class="m-0">
    <a href="index.php">
      <img src="images/newlogo1.png" alt="Logo" style="height: 50px;">
    </a>
  </h1>
  <div class="nav-container d-none d-md-flex flex-row align-items-center">
    <ul id="nav-menu" class="d-flex flex-row list-unstyled gap-3 mb-0">
      <li><a href="index.php" class="nav-link">Home</a></li>
      <li><a href="php/student/news.php" class="nav-link">News</a></li>
      <li><a href="php/student/faculty.php" class="nav-link">Faculty</a></li>
      <li><a href="php/student/gallery.php" class="nav-link">Gallery</a></li>
      <li><a href="php/student/aboutus.php" class="nav-link">About Us</a></li>
      <li><a href="php/student/contactus.php" class="nav-link">Contacts</a></li>
    </ul>
    <div class="search-bar d-flex ms-3">
      <input type="text" class="form-control" placeholder="Search...">
      <button class="btn btn-danger ms-2">Search</button>
    </div>
  </div>
</header>

<!-- Sidebar Navigation (Mobile Only) -->
<div class="mobile-sidebar">
  <ul id="nav-menu-mobile" class="list-unstyled">
    <li><a href="index.php" class="nav-link">Home</a></li>
    <li><a href="php/student/news.php" class="nav-link">News</a></li>
    <li><a href="php/student/faculty.php" class="nav-link">Faculty</a></li>
    <li><a href="php/student/gallery.php" class="nav-link">Gallery</a></li>
    <li><a href="php/student/aboutus.php" class="nav-link">About Us</a></li>
    <li><a href="php/student/contactus.php" class="nav-link">Contacts</a></li>
  </ul>
  <div class="search-bar mt-2 px-3 d-flex">
    <input type="text" class="form-control" placeholder="Search...">
    <button class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 45px; padding: 0;">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-search" viewBox="0 0 20 20">
        <path d="M11 6a5 5 0 1 1-10 0 5 5 0 0 1 10 0zm-1.225 4.02a6.5 6.5 0 1 1 1.225-1.225l3.85 3.85a.75.75 0 0 1-1.06 1.06l-3.85-3.85z"/>
      </svg>
    </button>
  </div>
</div>

<!-- Home Section -->
<div class="sectionactive text-start text-md-center py-5">
  <h2 class="mb-2" style="margin-left:50px;">Greetings! Welcome to</h2>
  <h3 class="mb-1" style="margin-left:30px;">A fun place to</h3>
  <h3 class="mb-1">
    <span style="color: red; padding-left: 220px;"><b>PLAY</b></span> and
    <span style="color: red;"><b>LEARN</b></span>
  </h3>
  <!-- Enroll Now Button -->
  <div class="enroll-btn-wrapper">
    <a href="/php/student/enroll.php" class="enroll-btn">Learn with us</a>
  </div>
</div>

<!-- Footer -->
<section class="footer mt-auto py-5">
  <div class="container">
    <div class="row footer-row">
      <div class="col-md-3 footer-col mb-4">
        <h4>Info</h4>
        <ul class="links list-unstyled">
          <li><a href="php/student/index.php">Home</a></li>
          <li><a href="php/student/news.php">News</a></li>
          <li><a href="php/student/aboutus.php">About Us</a></li>
          <li><a href="php/student/contactus.php">Contacts</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-col mb-4">
        <h4>Explore</h4>
        <ul class="links list-unstyled">
          <li><a href="php/student/gallery.php">Gallery</a></li>
          <li><a href="php/student/faculty.php">Faculty</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-col mb-4">
        <h4>Legal</h4>
        <ul class="links list-unstyled">
          <li><a href="php/student/aboutus.php#mission-vision-container">Mission</a></li>
          <li><a href="php/student/aboutus.php#mission-vision-container">Vision</a></li>
          <li><a href="php/student/aboutus.php#calendar">School Calendar</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-col">
        <a href="https://web.facebook.com/wrtclcinc2002" class="text-white text-decoration-none">
          <h4>Facebook</h4>
        </a>
        <p>
          Follow our Facebook page for a weekly dose of news, updates,
          helpful tips, and exclusive offers.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS (for dropdowns, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Responsive Nav Script -->
<script>
  const navToggle = document.querySelector('.nav-toggle');
  const mobileSidebar = document.querySelector('.mobile-sidebar');
  const overlay = document.querySelector('.overlay');

  navToggle.addEventListener('click', () => {
    mobileSidebar.classList.toggle('active');
    overlay.classList.toggle('active');
  });

  overlay.addEventListener('click', () => {
    mobileSidebar.classList.remove('active');
    overlay.classList.remove('active');
  });
</script>

</body>
</html>
