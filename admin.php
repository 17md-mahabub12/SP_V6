<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h2>Admin Login</h2>
    <form id="adminLoginForm">
        <label for="adminId">ID:</label>
        <input type="text" id="adminId" name="adminId" required>
        
        <label for="adminPassword">Password:</label>
        <input type="password" id="adminPassword" name="adminPassword" required>
        
        <button type="submit">Login</button>
    </form>

    <script>
        const correctId = "Dipu";
        const correctPassword = "213-15-4299";

        document.getElementById("adminLoginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const adminId = document.getElementById("adminId").value;
            const adminPassword = document.getElementById("adminPassword").value;

            if (adminId === correctId && adminPassword === correctPassword) {
                window.location.href = "display.php";
            } else {
                alert("Invalid ID or Password.");
            }
        });
    </script>
</body>
</html>
