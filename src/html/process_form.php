<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "napex";

    // Create a database connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Process form information
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $deceased_fname = $_POST["deceased_fname"];
        $deceased_lname = $_POST["deceased_lname"];
        $title = $_POST["title"];
        $gender = $_POST["gender"];
        $birth_date = $_POST["birth_date"];
        $country_birth = $_POST["country_birth"];
        $death_date = $_POST["death_date"];
        $country_death = $_POST["country_death"];
        $birth_place = $_POST["birth_place"];
        $funeral_home = $_POST["funeral_home"];
        $contact_person = $_POST["contact_person"];
        $contact_no = $_POST["contact_no"];
        $funeral_service_date = $_POST["funeral_service_date"];
        $funeral_service_time = $_POST["funeral_service_time"];
        $funeral_service_location = $_POST["funeral_service_location"];
        $worship_name = $_POST["worship_name"];
        $burial_date = $_POST["burial_date"];
        $burial_time = $_POST["burial_time"];
        $county = $_POST["county"];
        $quote = $_POST["quote"];
        $obiturary_info = $_POST["editor"];
        $created = date("Y-m-d");
        $death_place = $_POST["death_place"];
        $burial_location = $_POST["burial_location"];

        // Create a database connection
   

        // SQL query to insert data into the 'death' table
$sql = "INSERT INTO `death` (
    `deceased_fname`,
    `deceased_lname`,
    `title`,
    `gender`,
    `birth_date`,
    `country_birth`,
    `death_date`,
    `country_death`,
    `birth_place`,
    `funeral_home`,
    `contact_person`,
    `contact_no`,
    `funeral_service_date`,
    `funeral_service_time`,
    `funeral_service_location`,
    `worship_name`,
    `burial_date`,
    `burial_time`,
    `county`,
    `quote`,
    `obiturary_info`,
    `created`,
    `death_place`,
    `burial_location`
) VALUES (
    '$deceased_fname',
    '$deceased_lname',
    '$title',
    '$gender',
    '$birth_date',
    '$country_birth',
    '$death_date',
    '$country_death',
    '$birth_place',
    '$funeral_home',
    '$contact_person',
    $contact_no,
    '$funeral_service_date',
    '$funeral_service_time',
    '$funeral_service_location',
    '$worship_name',
    '$burial_date',
    '$burial_time',
    '$county',
    '$quote',
    '$obiturary_info',
    '$created',
    '$death_place',
    '$burial_location'
)";
 // Execute the query
 if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

    }
    
?>
