<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/wrlogo.png" type="image/png">
    <title>Students</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha384-rOA1PnstxnOBLzCLvNLVXr0zH6A9qE6sC1ZlA4UomGxU9p1FMR5j2FQj5K7AjzL8" crossorigin="anonymous"></script>
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
    font-weight: 1000;
    font-size: large;
    margin-top: 10px;
    margin-right: 20px;
    border-radius: 10px;
  }

  header .tophead {
      margin-left: 0; /* Start from the left */
      margin-right: 0; /* Extend to the right */
      width: 100%; /* Ensure it spans the full width */
      box-sizing: border-box; /* Include padding and border in width */
  }

  div .students {
    margin-right: 10px;
    display: relative;
    width: 23.3%; 
    height: 155px;
    background-color: rgba(255, 255, 255, 1);
    padding: 15px;
    font-size: large;
    margin-bottom: 10px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    padding-right: 100px; /* space for the logo */
  }

  .students img {
    position: absolute;
    top: 50%;
    right: -10px;
    transform: translateY(-50%);
    height: 185px;
    width: auto;
    pointer-events: none;
  }


  div .enrollees {
    margin-right: 10px;
    display: block;
    width: 100%; 
    height: auto;
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
    margin-left: 0%;
  }

  .titlesss {
    font-weight: 1000;
  }

  .num {
    font-size: xx-large;
    margin: 0;
  }

  /* Table Styling */
  #enrolleesTable {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-size: 18px;
      text-align: left;
  }

  #enrolleesTable th, #enrolleesTable td {
      border: 1px solid #ddd;
      padding: 12px;
  }

  #enrolleesTable th {
      background-color: #f4f4f4;
      color: #333;
      font-weight: bold;
  }

  #enrolleesTable tr:nth-child(even) {
      background-color: #f9f9f9;
  }

  #enrolleesTable tr:hover {
      background-color: #f1f1f1;
  }

  /* Pagination Buttons */
  .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
  }

  .pagination button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 0 5px;
      cursor: pointer;
      border-radius: 5px;
  }

  .pagination button:hover {
      background-color: #45a049;
  }

  /* Improved Modal Styling */
  #detailsModal,
  #detailsModal1 {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60%;
      max-width: 800px;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      font-family: 'Poppins', sans-serif;
  }

  #detailsModal h3,
  #detailsModal1 h3 {
      margin-top: 0;
      font-size: 24px;
      color: #333;
      text-align: center;
      border-bottom: 2px solid #4CAF50;
      padding-bottom: 10px;
  }

  #detailsModal p,
  #detailsModal1 p {
      font-size: 16px;
      color: #555;
      margin: 10px 0;
      line-height: 1.6;
  }

  #detailsModal .modal-footer,
  #detailsModal1 .modal-footer {
      text-align: right;
      margin-top: 20px;
  }

  #detailsModal .modal-footer button,
  #detailsModal1 .modal-footer button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      margin-left: 10px;
  }

  #detailsModal .modal-footer .accept,
  #detailsModal1 .modal-footer .accept {
      background-color: #28a745;
      color: white;
  }

  #detailsModal .modal-footer .decline,
  #detailsModal1 .modal-footer .decline {
      background-color: #dc3545;
      color: white;
  }

  #detailsModal .modal-footer .close,
  #detailsModal1 .modal-footer .close {
      background-color: #6c757d;
      color: white;
  }

  /* Overlay for Modal */
  #modalOverlay, #modalOverlay1 {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
  }

  /* Search Bar Styling */
  #searchBar {
      width: 100%;
      max-width: 100%;
      padding: 12px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
      outline: none;
      transition: border-color 0.3s;
  }

  #searchBar:focus {
      border-color: #4CAF50;
  }

  /* Ensure consistent table design for all tables */
  table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-size: 18px;
      text-align: left;
  }

  table th, table td {
      border: 1px solid #ddd;
      padding: 12px;
  }

  table th {
      background-color: #f4f4f4;
      color: #333;
      font-weight: bold;
  }

  table tr:nth-child(even) {
      background-color: #f9f9f9;
  }

  table tr:hover {
      background-color: #f1f1f1;
  }

  /* Ensure consistent column widths across all tables */
  table th, table td {
      width: auto; /* Adjust this to a fixed width if needed */
      text-align: left;
  }

  /* Example: Set specific widths for each column */
  table th:nth-child(1), table td:nth-child(1) {
      width: 30%; /* Adjust as needed */
  }

  table th:nth-child(2), table td:nth-child(2) {
      width: 20%; /* Adjust as needed */
  }

  table th:nth-child(3), table td:nth-child(3) {
      width: 20%; /* Adjust as needed */
  }

  table th:nth-child(4), table td:nth-child(4) {
      width: 100%; /* Adjust as needed */
  }

  /* Button Styling */
  .action-buttons {
      display: flex;
      gap: 10px;
  }

  .action-buttons button {
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }

  .action-buttons .edit {
      background-color: #007bff;
      color: white;
  }

  .action-buttons .edit:hover {
      background-color: #0056b3;
  }

  .action-buttons .archive {
      background-color: #dc3545;
      color: white;
  }

  .action-buttons .archive:hover {
      background-color: #a71d2a;
  }

  .container {
      display: flex;
  }

  .sidenav {
      flex: 0 0 250px; /* Fixed width for the sidebar */
  }

  .main-content {
      flex: 1; /* Take up the remaining space */
      margin-left: 20px; /* Add some spacing between the sidebar and content */
  }

  /* Styling for Accepted and Declined Tables */
  #acceptedTable, #declinedTable, #enrolleesTable {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
  }

  #acceptedTable th, #acceptedTable td,
  #declinedTable th, #declinedTable td,
  #enrolleesTable th, #enrolleesTable td {
      padding: 14px 16px;
      text-align: left;
      border-bottom: 1px solid #eee;
  }

  #acceptedTable th, #declinedTable th, #enrolleesTable th {
      background-color: #f5f5f5;
      font-weight: 600;
      color: #333;
  }

  #acceptedTable tr:nth-child(even),
  #declinedTable tr:nth-child(even),
  #enrolleesTable tr:nth-child(even) {
      background-color: #fafafa;
  }

  #acceptedTable tr:hover,
  #declinedTable tr:hover,
  #enrolleesTable tr:hover {
      background-color: #f1f1f1;
      transition: background 0.3s ease;
  }

  #acceptedTable th:first-child, #acceptedTable td:first-child,
  #declinedTable th:first-child, #declinedTable td:first-child,
  #enrolleesTable th:first-child, #enrolleesTable td:first-child {
      border-top-left-radius: 10px;
  }

  #acceptedTable th:last-child, #acceptedTable td:last-child,
  #declinedTable th:last-child, #declinedTable td:last-child,
  #enrolleesTable th:last-child, #enrolleesTable td:last-child {
      border-top-right-radius: 10px;
  }

  /* Styling for View, Previous, and Next Buttons */
  .action-buttons .view,
  .pagination button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
  }

  .pagination button {
      margin: 0 5px;
  }

  .action-buttons .view:hover,
  .pagination button:hover {
      background-color: #0056b3;
  }

  /* Modal Styling */
  .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
  }

  .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      animation: fadeIn 0.3s;
  }

  .modal-content h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
  }

  .modal-content label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #555;
  }

  .modal-content input[type="text"],
  .modal-content input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
  }

  .modal-content button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
  }

  .modal-content button:hover {
      background-color: #45a049;
  }

  .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
  }

  .close:hover,
  .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
  }

  @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
  }

  .add-faculty-form {
      display: flex;
      flex-direction: column;
      gap: 15px;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .form-group {
      display: flex;
      flex-direction: column;
  }

  .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
      color: #333;
  }

  .form-group input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
  }

  .form-group input:focus {
      border-color: #4CAF50;
      outline: none;
  }

  .submit-button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      align-self: flex-start;
  }

  .submit-button:hover {
      background-color: #45a049;
  }
</style>
</head>
<body>
<header>

<?php
// Ensure the database connection is included only once at the top
include_once '../../database/dbconnection.php';

// Fetch total number of enrollees
$totalEnrolleesQuery = "SELECT COUNT(*) as total FROM enrollment";
$totalEnrolleesResult = $conn->query($totalEnrolleesQuery);
$totalEnrollees = $totalEnrolleesResult->fetch_assoc()['total'];

// Fetch total number of male enrollees
$maleEnrolleesQuery = "SELECT COUNT(*) as total FROM enrollment WHERE gender = 'male'";
$maleEnrolleesResult = $conn->query($maleEnrolleesQuery);
$maleEnrollees = $maleEnrolleesResult->fetch_assoc()['total'];

// Fetch total number of female enrollees
$femaleEnrolleesQuery = "SELECT COUNT(*) as total FROM enrollment WHERE gender = 'female'";
$femaleEnrolleesResult = $conn->query($femaleEnrolleesQuery);
$femaleEnrollees = $femaleEnrolleesResult->fetch_assoc()['total'];
?>

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

    <div class="main-content">
      <header class="tophead">
          <div class="title">
              <a class="titlesss">Faculties</a>
          </div>
      </header>
      <br><br><br>

      <div class="enrollees">
          <a class="titlesss">Faculty List</a>
          <table id="facultyTable">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Subject</th>
                      <th>Grade</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $facultyQuery = "SELECT * FROM faculty";
                  $facultyResult = $conn->query($facultyQuery);
                  while ($row = $facultyResult->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row['name'] . "</td>";
                      echo "<td>" . $row['age'] . "</td>";
                      echo "<td>" . $row['subject'] . "</td>";
                      echo "<td>" . $row['grade'] . "</td>";
                      echo "<td>" . ($row['status'] == 1 ? 'Active' : 'Inactive') . "</td>";
                      echo "<td class='action-buttons'>";
                      echo "<button class='edit' onclick='editFaculty(" . $row['id'] . ")'>Edit</button>";
                      echo "<button class='archive' onclick='archiveFaculty(" . $row['id'] . ")'>" . ($row['status'] == 1 ? 'Archive' : 'Activate') . "</button>";
                      echo "</td>";
                      echo "</tr>";
                  }
                  ?>
              </tbody>
          </table>
      </div>

      <div class="enrollees">
          <a class="titlesss">Add New Faculty</a>
          <form action="add_faculty.php" method="POST" enctype="multipart/form-data" class="add-faculty-form">
              <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" placeholder="Enter faculty name" required>
              </div>
              <div class="form-group">
                  <label for="age">Age:</label>
                  <input type="number" id="age" name="age" placeholder="Enter faculty age" required>
              </div>
              <div class="form-group">
                  <label for="subject">Subject:</label>
                  <input type="text" id="subject" name="subject" placeholder="Enter subject taught" required>
              </div>
              <div class="form-group">
                  <label for="grade">Grade:</label>
                  <input type="text" id="grade" name="grade" placeholder="Enter grade taught" required>
              </div>
              <div class="form-group">
                  <label for="image">Upload Image:</label>
                  <input type="file" id="image" name="image" accept="image/*" required>
              </div>
              <button type="submit" class="submit-button">Add Faculty</button>
          </form>
      </div>

      <div id="editFacultyModal" class="modal">
          <div class="modal-content">
              <span class="close" onclick="closeModal()">&times;</span>
              <h2>Edit Faculty</h2>
              <form id="editFacultyForm">
                  <input type="hidden" id="facultyId" name="id">
                  <label for="editName">Name:</label>
                  <input type="text" id="editName" name="name" required><br>
                  <label for="editImage">Image:</label>
                  <input type="file" id="editImage" name="image"><br>
                  <button type="submit">Save Changes</button>
              </form>
          </div>
      </div>

      <script>
          function editFaculty(id) {
              // Fetch faculty details via AJAX
              fetch(`edit_faculty.php?id=${id}`)
                  .then(response => response.json())
                  .then(data => {
                      // Populate modal fields with fetched data
                      document.getElementById('facultyId').value = data.id;
                      document.getElementById('editName').value = data.name;
                      // Show the modal
                      document.getElementById('editFacultyModal').style.display = 'block';
                  });
          }

          function closeModal() {
              document.getElementById('editFacultyModal').style.display = 'none';
          }

          // Handle form submission
          document.getElementById('editFacultyForm').addEventListener('submit', function(event) {
              event.preventDefault();
              const formData = new FormData(this);

              fetch('edit_faculty.php', {
                  method: 'POST',
                  body: formData
              })
              .then(response => response.text())
              .then(result => {
                  alert(result);
                  closeModal();
                  location.reload(); // Reload the page to reflect changes
              });
          });

          // Ensure buttons are styled dynamically
          document.querySelectorAll('.action-buttons button').forEach(button => {
              button.addEventListener('mouseover', () => {
                  button.style.opacity = '0.9';
              });
              button.addEventListener('mouseout', () => {
                  button.style.opacity = '1';
              });
          });
      </script>
    </div>
  </div>
</body>
</html>