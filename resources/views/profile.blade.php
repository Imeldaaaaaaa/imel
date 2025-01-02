<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Shop - Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            background: url('images/donat.jpg') center/cover no-repeat;
            min-height: 100vh;    
        }
        header, footer {
            background-color: #ff6f00;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav ul {
            list-style: none;
            padding: 20;
            margin: 20;
            display: flex;
            justify-content: center;
            background-color: #ff8f00;
        }
        nav ul li {
            margin: 0 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .container {
            text-align: center;
            padding: 40px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna putih transparan */
        }
        img {
            width: 150px;
            height: auto;
            margin: 15px;
            border-radius: 50%;
        }
                footer {
            background-color: #ff6f00;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Profile</h1>
    </header>
    <nav>
        <ul>
            <li><a href="http://127.0.0.1:8000/">Home</a></li>
            <li><a href="http://127.0.0.1:8000/about">About</a></li>
            <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <div>
            <img src="/images/imel.jpg" alt="Baker 1">
        </div>
        <h2>Imelda Dwi Saputri</h2>
        <p>CEO</p>
    </div>
    <footer>
        <p>&copy; 2025 Donut Shop. All Rights Reserved.</p>
    </footer>
</body>
</html>