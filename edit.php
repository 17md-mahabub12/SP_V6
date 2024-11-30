<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `table` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $mobile = $_POST['mobile'];
    $package = $_POST['package'];
    $fee = $_POST['fee'];
    $month = $_POST['month'];
    $password = $_POST['password'];

    $updateSql = "UPDATE `table` SET name='$name', gmail='$gmail', mobile='$mobile', package='$package', fee='$fee', month='$month', password='$password' WHERE id='$id'";
    if (mysqli_query($conn, $updateSql)) {
        header("Location: display.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>

        <label for="gmail">Email:</label>
        <input type="email" name="gmail" value="<?php echo $user['gmail']; ?>" required>

        <label for="mobile">Mobile:</label>
        <input type="tel" name="mobile" value="<?php echo $user['mobile']; ?>" required>

        <label for="package">Package:</label>
        <input type="text" name="package" value="<?php echo $user['package']; ?>" required>

        <label for="fee">Fee:</label>
        <input type="number" name="fee" value="<?php echo $user['fee']; ?>" required>

        <label for="month">Month:</label>
        <input type="number" name="month" value="<?php echo $user['month']; ?>" required>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $user['password']; ?>" required>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
