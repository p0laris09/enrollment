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
      gap: 5px;
  }

  .action-buttons button {
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
  }

  .action-buttons .view {
      background-color: #007bff;
      color: white;
  }

  .action-buttons .accept {
      background-color: #28a745;
      color: white;
  }

  .action-buttons .decline {
      background-color: #dc3545;
      color: white;
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

// Fetch total number of students
$totalStudentsQuery = "SELECT COUNT(*) as total FROM students";
$totalStudentsResult = $conn->query($totalStudentsQuery);
$totalStudents = $totalStudentsResult->fetch_assoc()['total'];

// Fetch total number of male students
$maleStudentsQuery = "SELECT COUNT(*) as total FROM students WHERE gender = 'Male'";
$maleStudentsResult = $conn->query($maleStudentsQuery);
$maleStudents = $maleStudentsResult->fetch_assoc()['total'];

// Fetch total number of female students
$femaleStudentsQuery = "SELECT COUNT(*) as total FROM students WHERE gender = 'Female'";
$femaleStudentsResult = $conn->query($femaleStudentsQuery);
$femaleStudents = $femaleStudentsResult->fetch_assoc()['total'];

// Fetch total number of graduates
$totalGraduatesQuery = "SELECT COUNT(*) as total FROM students WHERE status = 'Graduated'";
$totalGraduatesResult = $conn->query($totalGraduatesQuery);
$totalGraduates = $totalGraduatesResult->fetch_assoc()['total'];
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
                <a class="titlesss">Students</a>
            </div>
        </header>
        <br><br><br>

        <div class="students">
            <a class="titlesss">Total Students</a>
            <p class="num"><?php echo $totalStudents; ?></p>
            <img src="../../images/adminpics/populationlogo.png">
        </div>

        <div class="students">
            <a class="titlesss">Male</a>
            <p class="num"><?php echo $maleStudents; ?></p>
            <img src="../../images/adminpics/malelogo.png">
        </div>

        <div class="students">
            <a class="titlesss">Female</a>
            <p class="num"><?php echo $femaleStudents; ?></p>
            <img src="../../images/adminpics/femalelogo.png">
        </div>

        <div class="enrollees">
            <a class="titlesss">Students Data</a>

            <!-- Search Bar -->
            <input type="text" id="searchBar" placeholder="Search by name or other details..." onkeyup="filterTable()" style="width: 100%; padding: 10px; margin-bottom: 10px;">

            <!-- Table for Students -->
            <table id="studentsTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Grade</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT id, firstname, middlename, surname, dob, grade FROM students";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $age = date_diff(date_create($row['dob']), date_create('today'))->y;
                            echo "<tr>";
                            echo "<td>" . $row['firstname'] . " " . $row['middlename'] . " " . $row['surname'] . "</td>";
                            echo "<td>" . $age . "</td>";
                            echo "<td>" . $row['grade'] . "</td>";
                            echo "<td class='action-buttons'>";
                            echo "<button class='view' onclick='viewDetails(" . $row['id'] . ")'>View</button> ";
                            echo "<button class='suspend' onclick='updateStatus(\"suspend\")'>Suspend</button> ";
                            echo "<button class='expel' onclick='updateStatus(\"expel\")'>Expel</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>No students found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>


            <!-- Pagination Buttons -->
            <div class="pagination">
                <button onclick="previousPage()">Previous</button>
                <button onclick="nextPage()">Next</button>
            </div>

            <!-- Modal for Viewing Details -->
            <div id="modalOverlay">
                <div id="detailsModal">
                    <h3>Student Details</h3>
                    <div id="modalContent">
                        <!-- Content dynamically loaded via JavaScript -->
                    </div>
                    <div class="modal-footer">
                        <button class="close" onclick="closeModal()">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="enrollees">

            <!-- Table for Graduates -->
            <a class="titlesss">Graduates Data</a>
            <table id="graduatesTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT id, firstname, middlename, surname, dob FROM students WHERE status = 'Graduated'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $age = date_diff(date_create($row['dob']), date_create('today'))->y;
                            echo "<tr>";
                            echo "<td>" . $row['firstname'] . " " . $row['middlename'] . " " . $row['surname'] . "</td>";
                            echo "<td>" . $age . "</td>";
                            echo "<td class='action-buttons'>";
                            echo "<button class='view' onclick='viewGraduateDetails(" . $row['id'] . ")'>View Details</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' class='text-center'>No graduates found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <script>
                function viewGraduateDetails(id) {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', `fetchGraduateDetails.php?id=${id}`, true);
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            document.getElementById('modalContent').innerHTML = xhr.responseText;
                            document.getElementById('modalOverlay').style.display = 'block';
                            document.getElementById('detailsModal').style.display = 'block';
                        } else {
                            alert('Failed to fetch details.');
                        }
                    };
                    xhr.send();
                }
            </script>
        </div>
            
    </div>
</div>

<script>
    let currentPage = 1;
    const rowsPerPage = 10;
    let currentStudentId = null; // Store the current student ID

    function filterTable() {
        const searchValue = document.getElementById('searchBar').value.toLowerCase();
        const rows = document.querySelectorAll('#studentsTable tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
            row.style.display = rowText.includes(searchValue) ? '' : 'none';
        });
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            loadTableData('studentsTable', currentPage);
        }
    }

    function nextPage() {
        const rows = document.getElementById('studentsTable').querySelectorAll('tbody tr');
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        if (currentPage < totalPages) {
            currentPage++;
            loadTableData('studentsTable', currentPage);
        }
    }

    function loadTableData(tableId, page) {
        const table = document.getElementById(tableId);
        const rows = table.querySelectorAll('tbody tr');
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = index >= start && index < end ? '' : 'none';
        });
    }

    function viewDetails(id) {
        currentStudentId = id; // Set the current student ID
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `fetchStudentDetails.php?id=${id}`, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('modalContent').innerHTML = xhr.responseText;
                document.getElementById('modalOverlay').style.display = 'block';
                document.getElementById('detailsModal').style.display = 'block';
            } else {
                alert('Failed to fetch details.');
            }
        };
        xhr.send();
    }

    function updateStatus(action) {
        if (!currentStudentId) {
            alert('No student selected.');
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'students.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                alert('Status updated successfully!');
                location.reload();
            } else {
                alert('Error updating status.');
            }
        };
        xhr.send(`id=${currentStudentId}&action=${action}`);
    }

    function closeModal() {
        document.getElementById('modalOverlay').style.display = 'none';
        document.getElementById('detailsModal').style.display = 'none';
    }

    // Initialize pagination for the table
    loadTableData('studentsTable', currentPage);
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'suspend') {
        $sql = "UPDATE students SET status = 'Suspended' WHERE id = ?";
    } elseif ($action === 'expel') {
        $sql = "UPDATE students SET status = 'Expelled' WHERE id = ?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();

    echo json_encode(['success' => true]);
    exit;
}

// Ensure the connection is closed only once
$conn->close();
?>
</body>
</html>