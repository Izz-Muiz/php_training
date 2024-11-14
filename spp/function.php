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

    $image = upload();
    if (!$image) {
        return false;
    }
    // $image = htmlspecialchars($data["image"]);

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
    // $image = htmlspecialchars($data["image"]);
    $oldImage = htmlspecialchars($data["oldImage"]);
    
    if ($_FILES['image']['error'] === 4) {
        $image = $oldImage;
    } else {
        $image = upload();
    }

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

function find($search) {
    $query = "SELECT * FROM students WHERE 
                name LIKE '%$search%' 
                OR ic LIKE '%$search%' 
                OR email LIKE '%$search%' 
                OR course LIKE '%$search%'";
    return query($query);
}

function upload() {
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileTemp = $_FILES['image']['tmp_name'];

    if ($fileError === 4) {
        echo "<script>Upload FIle!</script>";
        return false;
    }

    $validExtension = ['jpg', 'jpeg', 'png'];
    $extension = explode('.',$fileName);
    $extension = strtolower(end($extension));

    if (!in_array($extension, $validExtension)) {
        echo "<script>Not Image!</script>";
        return false;
    }

    if ($fileSize > 1000000) {
        echo "<script>Too Big!</script>";
        return false;
    }
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $extension;
    move_uploaded_file($fileTemp, 'img/' . $fileName);
    return $fileName;
}

?>