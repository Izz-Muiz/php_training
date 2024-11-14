<?php

require "function.php";

$id = $_GET["id"];

if (deleteStudent($id) > 0) {
    echo "
    <script>
        alert('Data deleted successfully');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data delete failed');
    </script>";
    echo mysqli_error($conn);
}
?>