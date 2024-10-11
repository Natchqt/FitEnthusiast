<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background:black;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a11cb;
        }
        .profile-info {
            margin: 20px 0;
            padding: 15px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: box-shadow 0.3s;
        }
        .profile-info:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        .profile-info p {
            margin: 10px 0;
        }
        .logout {
            display: block;
            text-align: center;
            margin-top: 30px;
            padding: 12px 15px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s, transform 0.2s;
        }
        .logout:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Profile</h1>
    
    <div class="profile-info">
        <p><strong>Username:</strong> <span id="username">user1</span></p>
        <p><strong>Email:</strong> <span id="email">user@gmail.com</span></p>
    </div>
    
    <a href="index.php" class="logout">Logout</a>
</div>

</body>
</html>
