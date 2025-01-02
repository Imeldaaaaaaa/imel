<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Shop - About Us</title>
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
            padding: 40px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna putih transparan */
        }
        img {
            width: 200px;
            height: auto;
            margin: 10px;
        }
        figure {
            display: inline-block;
            margin: 15px;
            text-align: center;
        }
        img {
            width: 200px;
            height: auto;
            border-radius: 10px;
        }
        figcaption {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }
        .price {
            font-size: 18px;
            font-weight: bold;
            color: #ff6f00;
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
        <h1>About Our Donut Shop</h1>
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
        <h2>Donut World - Surga bagi pecinta donat!</h2>
        <p>Tersedia donat klasik, premium, dan kreasi unik yang siap memanjakan lidah Anda.</p>
        <div>
            <figure>
                <img src="/images/coklat.jpg" alt="Chocolate Donut">
                <figcaption>Chocolate Donut</figcaption>
                <p class="price">Rp 15.000</p>
            </figure>
            <figure>
                <img src="/images/glazed.jpg" alt="Glazed Donut">
                <figcaption>Glazed Donut</figcaption>
                <p class="price">Rp 15.000</p>
            </figure>
            <figure>
                <img src="/images/q.jpg" alt="Premium Donut">
                <figcaption>Premium Donut</figcaption>
                <p class="price">Rp 20.000</p>
            </figure>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Donut Shop. All Rights Reserved.</p>
    </footer>
</body>
</html>
