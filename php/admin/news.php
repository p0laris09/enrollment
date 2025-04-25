<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style>

  body {
    margin: 0;
    color: black;
    font-family: Arial, sans-serif;
    background-color: rgba(227, 223, 223, 1);
    font-family: 'Poppins', sans-serif;
    
  }

   a:hover {
    color: #0a0a0a; 
    background-color: rgba(227, 223, 223, 1); 
    border-radius: 5px;
  }

  /* Vertical side section */
  .sidenav {
      height: 100vh;
      width: 250px;
      background-color: rgba(255, 255, 255, 1);
      color: rgb(0, 0, 0);
      padding: 20px;
      margin-right: 5px;
      padding-top: 30px;
      padding-bottom: 18px;
  }

  .sidenav a {
      display: block;
      color: black;
      padding: 12px 10px ;
      text-decoration: none;
      border-radius: 0px;
      font-size: 20px;
  }

  .ident {
      display: flex;
  }

  .ident a {
      font-size: 16px;
  }

  .ident img {
      max-width: 50px;
    height: 50px;
      padding-top: 15px;
  }
  .main-content {
    margin-left: 250px;
    padding: 20px 10px 20px;
    display: flex;
    flex-wrap: wrap;
  }
 
  header .title {
    background-color: rgba(255, 255, 255, 1);
    padding: 15px;
    margin-left: 260px;
    font-weight: 1000;
    font-size: large;
    margin-top: 10px;
    margin-right: 20px;
    border-radius: 10px;
  }

  div .faculty {
    margin-right: 10px;
    display: block;
    width: 100%; 
    height: 250px;
    background-color: rgba(255, 255, 255, 1);
    padding: 15px;
    font-size: large;
    margin-bottom: 10px;
    border-radius: 10px;
  }

  div .students {
    margin-right: 10px;
    display: block;
    width: 46.5%; 
    height: 250px;
    background-color: rgba(255, 255, 255, 1);
    padding: 15px;
    font-size: large;
    margin-bottom: 10px;
    border-radius: 10px;
  }

  .gallery {
    margin-right: 10px;
    display: block;
    width: 100%; 
    height: 250px;
    background-color: rgba(255, 255, 255, 1);
    padding: 15px;
    padding-right: 75px;
    font-size: large;
    margin-bottom: 10px;
    border-radius: 10px;
  }

  .titlesss {
    font-weight: 1000;
  }

  
</style>
</head>
<body>
<header>

<div class="container">
    <div class="sidenav">
        <div class="ident">
            <img src="../../images/adminpics/wrlogo.png">
            <a href="" class="Name">West Rembo Teacher's Compound Learning Center</a>
        </div>
        <a href="index.php">Dashboard</a>
        <a href="faculty.php">Faculties</a>
        <a href="students.php">Students</a>
        <a href="enrollees.php">Enrollees</a>
        <a href="news.php">News</a>
        <a href="gallery.php"> Gallery</a>
        <a href="emails.php">Emails</a>
        <a href="/index.php">Logout</a>
    </div>

</header>
<header class="tophead">
  <div class="title">
    <a class="titlesss">News</a>
  </div>
</header>

<div class="main-content">

  <div class="faculty">
    <a class="titlesss">Published News</a>
    <p>list of published news</p>
  </div>

  <div class="students">
    <a class="titlesss">Main Article</a>
    <p>edit main article, insert picture and caption to database</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="Upload">
    </form>
  </div>

  <div class="students">
    <a class="titlesss">Sub Article 1</a>
    <p>edit sub articles insert picture and caption  to database</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="Upload">
    </form>
  </div>
  
  <div class="students">
    <a class="titlesss">Sub Article 2</a>
    <p>edit sub articles insert picture and caption to database</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="Upload">
    </form>
  </div>
  
  <div class="students">
    <a class="titlesss">Sub Article 3</a>
    <p>edit sub articles insert picture and caption to database</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="Upload">
    </form>
  </div>
  
  <div class="students">
    <a class="titlesss">Sub Article 4</a>
    <p>edit sub articles insert pictureand caption to database</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="Upload">
    </form>
  </div>
  
  <div class="students">
    <a class="titlesss">Sub Article 5</a>
    <p>edit sub articles insert picture and caption to database</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" value="Upload">
    </form>
  </div>
  

 </div>
</body>
</html>