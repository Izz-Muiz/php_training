<?php 
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "spp";

// Establish a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/**
 * Executes a SQL query and returns the result as an associative array.
 *
 * @param string $query The SQL query to execute.
 * @return array The result set as an array of associative arrays.
 */
function query($query) {
    global $conn;

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check for query execution errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Fetch all rows as an associative array
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addStudent($data) {
    global $conn;
    $ic = htmlspecialchars($data["ic"]);
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $course = htmlspecialchars($data["course"]);
    $image = htmlspecialchars($data["image"]);

    $insert = "INSERT INTO students VALUES
    ('', '$ic', '$name', '$email', '$course', '$image')";

    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function updateStudent($data) {
    global $conn;
    $id = $data["id"];
    $ic = htmlspecialchars($data["ic"]);
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $course = htmlspecialchars($data["course"]);
    $image = htmlspecialchars($data["image"]);

    $update = "UPDATE students SET 
                ic = '$ic',
                name = '$name',
                email = '$email',
                course = '$course',
                image = '$image'
               WHERE id = $id
                ";

    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}

function deleteStudent($id) {
    global $conn;

    $delete = "DELETE FROM students WHERE id = '$id'";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}
?>