<?php
include 'connect.php';

// Fetch data from the users table
$sql = "SELECT * FROM `table`";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="table.css">
    <script>
        function updateNotice() {
            const newNotice = document.getElementById('new-notice').value;
            if (newNotice.trim() !== '') {
                localStorage.setItem('gymNotice', newNotice); // Save notice to localStorage
                alert('Notice updated successfully!');
                document.getElementById('new-notice').value = ''; // Clear input field
            } else {
                alert('Please enter a valid notice.');
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>

    <h2>Registered Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Package</th>
            <th>Fee</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gmail']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['package']; ?></td>
            <td><?php echo $row['fee']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Update Gym Notice</h2>
    <textarea id="new-notice" rows="4" cols="50" placeholder="Enter the new notice here"></textarea><br>
    <button onclick="updateNotice()">Update Notice</button>

    <footer>
        <h1>Contact Us</h1>
        <p>Phone: 01666690912</p>
        <p>Location: Khagan Bazar, Ashulia, SAVAR, Dhaka-1320</p>
    </footer>
</body>
</html>
