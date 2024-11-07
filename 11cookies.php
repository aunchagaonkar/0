<?php
// Check if the cookies 'username' and 'useremail' are set
if (isset($_COOKIE["username"]) && isset($_COOKIE["useremail"])) {
    $message = "Welcome, " . $_COOKIE["username"] . "! Your email is " . $_COOKIE["useremail"] . ".";
} else {
    $message = "No cookies set.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookies Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        p {
            font-size: 16px;
            color: #333;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cookies Management</h1>
    <p><?php echo $message; ?></p>
    <p><a href="11delete_cookies.php">Delete Cookies</a></p>
</div>

</body>
</html>
