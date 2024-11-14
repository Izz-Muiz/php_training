<?php 
// Include necessary functions
require "function.php"; 

// Fetch students data from the database
$students = query("SELECT * FROM students"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Student Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to an external CSS file for styling -->
</head>
<body>
    <header>
        <h1>Student Registration</h1>
    </header>

    <main>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr> 
                    <th>No.</th>
                    <th>Action</th>
                    <th>Image</th>
                    <th>IC</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $student['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?= $student['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                        </td>
                        <td>
                            <img src="img/<?= htmlspecialchars($student['image']); ?>" alt="Image of <?= htmlspecialchars($student['name']); ?>" style="width: 50px; height: auto;">
                        </td>
                        <td><?= htmlspecialchars($student['ic']); ?></td>
                        <td><?= htmlspecialchars($student['name']); ?></td>
                        <td><?= htmlspecialchars($student['email']); ?></td>
                        <td><?= htmlspecialchars($student['course']); ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; <?= date("Y"); ?> Student Registration System</p>
    </footer>
</body>
</html>