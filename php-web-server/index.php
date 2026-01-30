<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFolks HUB Docker Compose Demo</title>
    <style>
        body {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-top: 20%;
        }
        form {
            margin: 20px auto;
            width: 300px;
        }
        input {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
        }
        input[type="submit"] {
            background: #ff7e5f;
            border: none;
            color: white;  
		}
    </style>
</head>
<body>
    <h1>Welcome to CloudFolks HUB Docker Compose Demo</h1>
    <p>Powered by CloudFolks HUB</p>
    <p>Website: <a href="https://www.CloudFolksHUB.com" style="color: white;">https://www.CloudFolksHUB.com</a></p>
    <form action="submit.php" method="post">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
