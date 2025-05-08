<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
    exit();
}

require_once '../../database/dbconnection.php';

// Fetch total feedback, pending, and resolved counts
$totalFeedback = 0;
$totalPending = 0;
$totalResolved = 0;

try {
    $query = "SELECT COUNT(*) AS total, SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS pending, SUM(CASE WHEN status = 'Resolved' THEN 1 ELSE 0 END) AS resolved FROM contactus";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $totalFeedback = $result['total'];
    $totalPending = $result['pending'];
    $totalResolved = $result['resolved'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Emails</title>
  <link rel="shortcut icon" href="../../images/wrlogo.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: white;
      position: fixed;
      width: 250px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .sidebar a {
      color: white;
      padding: 15px;
      display: block;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .main-content {
      margin-left: 250px;
      padding: 30px;
    }
    .logo {
      font-size: 24px;
      font-weight: bold;
      padding: 20px;
      text-align: center;
      border-bottom: 1px solid #495057;
    }
    .logout {
      padding: 15px;
      border-top: 1px solid #495057;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    .table {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <div>
      <div class="logo">
        <img src="../../images/wrlogo.png" alt="Logo" width="40"><br>
        Admin
      </div>
      <a href="dashboard.php">🏠 Dashboard</a>
      <a href="students.php">👨‍🎓 Students</a>
      <a href="enrollees.php">📝 Enrollees</a>
      <a href="emails.php">✉️ Contact Us</a>
    </div>
    <div class="logout">
      <a href="logout.php" class="text-danger">🚪 Logout</a>
    </div>
  </div>

  <div class="main-content">
    <h2 class="mb-4">Feedback Overview</h2>
    <div class="row mb-4">
      <div class="col-md-4">
        <div class="card text-white bg-primary shadow">
          <div class="card-body">
            <h5 class="card-title">Total Feedback</h5>
            <p class="card-text fs-4"><?php echo $totalFeedback; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-warning shadow">
          <div class="card-body">
            <h5 class="card-title">Pending</h5>
            <p class="card-text fs-4"><?php echo $totalPending; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-success shadow">
          <div class="card-body">
            <h5 class="card-title">Resolved</h5>
            <p class="card-text fs-4"><?php echo $totalResolved; ?></p>
          </div>
        </div>
      </div>
    </div>

    <h3 class="mt-5">Feedback List</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        try {
            $query = "SELECT id, name, email, phone, status, created_at FROM contactus";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                echo "<td>";
                echo "<button class='btn btn-info btn-sm' data-bs-toggle='modal' data-bs-target='#feedbackModal' data-id='" . $row['id'] . "'>View Details</button> ";
                echo "<button class='btn btn-success btn-sm' onclick='resolveFeedback(" . $row['id'] . ")'>Resolve</button> ";
                echo "<button class='btn btn-danger btn-sm' onclick='deleteFeedback(" . $row['id'] . ")'>Delete</button>";
                echo "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "<tr><td colspan='6'>Error: " . $e->getMessage() . "</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Modal for viewing feedback details -->
  <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="feedbackModalLabel">Feedback Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Name:</strong> <span id="feedbackName"></span></p>
          <p><strong>Email:</strong> <span id="feedbackEmail"></span></p>
          <p><strong>Phone:</strong> <span id="feedbackPhone"></span></p>
          <p><strong>Message:</strong> <span id="feedbackMessage"></span></p>
          <p><strong>Status:</strong> <span id="feedbackStatus"></span></p>
          <p><strong>Created At:</strong> <span id="feedbackCreatedAt"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const feedbackModal = document.getElementById('feedbackModal');
    feedbackModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      const feedbackId = button.getAttribute('data-id');

      // Fetch feedback details via AJAX
      fetch(`get_feedback_details.php?id=${feedbackId}`)
        .then(response => response.json())
        .then(data => {
          document.getElementById('feedbackName').textContent = data.name;
          document.getElementById('feedbackEmail').textContent = data.email;
          document.getElementById('feedbackPhone').textContent = data.phone;
          document.getElementById('feedbackMessage').textContent = data.message;
          document.getElementById('feedbackStatus').textContent = data.status;
          document.getElementById('feedbackCreatedAt').textContent = data.created_at;
        });
    });

    function showModal(title, message, callback) {
      const modalHtml = `
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">${title}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ${message}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmAction">Confirm</button>
              </div>
            </div>
          </div>
        </div>
      `;

      document.body.insertAdjacentHTML('beforeend', modalHtml);
      const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
      modal.show();

      document.getElementById('confirmAction').addEventListener('click', () => {
        callback();
        modal.hide();
        document.getElementById('confirmationModal').remove();
      });

      document.getElementById('confirmationModal').addEventListener('hidden.bs.modal', () => {
        document.getElementById('confirmationModal').remove();
      });
    }

    function showToast(message, type) {
      const toastContainer = document.createElement('div');
      toastContainer.style.position = 'fixed';
      toastContainer.style.top = '20px';
      toastContainer.style.left = '20px';
      toastContainer.style.zIndex = '1050';

      const toast = document.createElement('div');
      toast.className = `toast align-items-center text-white bg-${type} border-0`;
      toast.style.minWidth = '200px';
      toast.style.padding = '10px';
      toast.style.borderRadius = '5px';
      toast.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';

      const toastBody = document.createElement('div');
      toastBody.className = 'd-flex';
      toastBody.innerHTML = `
        <div class="toast-body">
          ${message}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close"></button>
      `;

      toast.appendChild(toastBody);
      toastContainer.appendChild(toast);
      document.body.appendChild(toastContainer);

      // Auto-dismiss after 3 seconds
      setTimeout(() => {
        toastContainer.remove();
      }, 3000);

      // Dismiss on close button click
      toast.querySelector('.btn-close').addEventListener('click', () => {
        toastContainer.remove();
      });
    }

    function resolveFeedback(id) {
      showModal('Resolve Feedback', 'Are you sure you want to mark this feedback as resolved?', () => {
        fetch(`resolve_feedback.php?id=${id}`, { method: 'POST' })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              showToast('Feedback marked as resolved.', 'success');
              location.reload();
            } else {
              showToast('Error: ' + data.error, 'danger');
            }
          });
      });
    }

    function deleteFeedback(id) {
      showModal('Delete Feedback', 'Are you sure you want to delete this feedback?', () => {
        fetch(`delete_feedback.php?id=${id}`, { method: 'POST' })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              showToast('Feedback deleted successfully.', 'success');
              location.reload();
            } else {
              showToast('Error: ' + data.error, 'danger');
            }
          });
      });
    }
  </script>
</body>
</html>