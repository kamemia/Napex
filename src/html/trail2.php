<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nispan</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      
        <!--  Row 1 -->
        <div class="container-fluid">
        <?php
// Replace these values with your actual database connection details
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "napex";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have an ID parameter to identify the record in the database
$id = $_GET['id']; // Make sure to sanitize this input in a real-world scenario

// Query to retrieve data for the specified record
$sql = "SELECT * FROM death WHERE id = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();

    // Close the database connection
    $conn->close();

    // Display the HTML structure with the fetched data
    echo '<div class="col-12">
            <div class="card">
              <div class="card-body p-4 border-bottom">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="fw-semibold fs-5 mb-4">In loving memory of</h5>
                    <div class="position-relative overflow-hidden d-inline-block">
                      <img src="../assets/images/profile/user-1.jpg" alt=""
                        class="img-fluid mb-4 rounded-circle position-relative" width="250">
                      <span
                        class="badge rounded-pill text-bg-danger fs-2 position-absolute top-0 end-0 d-flex align-items-center justify-content-center me-3 mt-2"
                        style="width: 20px; height: 20px;">1</span>
                    </div>
                    <h5 class="fw-semibold fs-8 mb-2">' . $row['deceased_fname'] . ' ' . $row['deceased_lname'] . '</h5>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                      <button type="button" class="btn btn-outline-primary m-1">' . $row['birth_date'] . '</button>
                      <button type="button" class="btn btn-outline-primary m-1">' . $row['death_date'] . '</button>
                    </div>
                    <div>
                      <h5 class="fw-semibold fs-8 mb-4"></h5>
                      <!-- Nav tabs -->
                      <ul class="nav nav-underline" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span>Obituary</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span>Funeral Details</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                            <span>Burial Location</span>
                          </a>
                        </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                          <div class="p-3">
                            <h3>' . $row['quote'] .'</h3>
                            <h4>' . $row['obiturary_info'] . '</h4>
                          </div>
                        </div>
                        <div class="tab-pane p-3" id="profile" role="tabpanel">
                          <h3>' . $row['funeral_home'] .'</h3>
                          <h3>' . $row['contact_person'] .'</h3>
                          <h3>' . $row['contact_no'] .'</h3>
                          <h3>' . $row['funeral_service_date'] .', ' . $row['funeral_service_time'] .'</h3>
                          <h3>' . $row['funeral_service_location'] .'</h3>
                          <h3>' . $row['worship_name'] .'</h3>
                          <h3>' . $row['burial_date'] .' , ' . $row['burial_time'] .'</h3>
                          <h3>' . $row['burial_location'] .'</h3>
                          <h3>' . $row['county'] .'</h3>
                        </div>
                        <div class="tab-pane p-3" id="messages" role="tabpanel">
                          <h3>Burial Location</h3>
                          <h4>' . $row['burial_location'] . '</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>';
} else {
    echo "Record not found.";
}?>
        </div>
    </div>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>