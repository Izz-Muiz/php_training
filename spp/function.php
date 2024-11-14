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
?>