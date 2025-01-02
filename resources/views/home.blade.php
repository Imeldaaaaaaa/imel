<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Shop - Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('images/donat.jpg') center/cover no-repeat;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        header {
            background-color: #ff6f00;
            color: white;
            padding: 30px;
            text-align: center;
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
            padding: 40px 50px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna putih transparan */
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
        <h1>Welcome to Donut Shop</h1>
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
        <h2>Freshly Baked Donuts Everyday!</h2>
        <p>Find your favorite flavors and enjoy the sweetness.</p>
    </div>
    <footer>
        <p>&copy; 2025 Donut Shop. All Rights Reserved.</p>
    </footer>
</body>
</html>