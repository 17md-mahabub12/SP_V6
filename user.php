<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $mobile = $_POST['mobile'];
    $package = $_POST['package'];
    $fee = $_POST['fee'];
    $month = $_POST['month'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `table` (name, gmail, mobile, package, fee, month, password) 
            VALUES ('$name', '$gmail', '$mobile', '$package', '$fee', '$month', '$password')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));  // Shows detailed error if query fails
    } else {
        header("Location: index.html?name=" . urlencode($name));
        exit(); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Gym Registration Form</h2>
    <form method="post" action="user.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="gmail">Email:</label>
        <input type="email" id="gmail" name="gmail" placeholder="Enter your email" required>

        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

        <label for="package">Package:</label>
        <input type="text" id="package" name="package" placeholder="Monthly/Half Yearly/Yearly" required>

        <label for="fee">Fee:</label>
        <input type="number" id="fee" name="fee" placeholder="Enter fee amount" required>

        <label for="month">Month:</label>
        <input type="number" id="month" name="month" placeholder="Enter number of months" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit" name="submit">Register</button>
    </form>
</body>
</html>
