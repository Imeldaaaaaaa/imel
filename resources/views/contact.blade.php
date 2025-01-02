<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Shop - Contact Us</title>
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
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input, textarea {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #ff8f00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 30px;
        }
        .contact-info p {
            margin: 5px 0;
            font-size: 18px;
            color:rgb(255, 255, 255);;
            font-family: 'Arial', sans-serif;
        }
        img {
            width: 150px;
            height: auto;
            border-radius: 50%;
            margin: 15px;
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
        .address {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <nav>
        <ul>
            <li><a href="http://127.0.0.1:8000/">Home</a></li>
            <li><a href="http://127.0.0.1:8000/about">About</a></li>
            <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
        </ul>
            <section class="contact">
        <div class="contact-info">
            <p><strong>Alamat:</strong> Jl. Sudirman No. 123, Banyumas, Indonesia</p>
            <p><strong>No WA:</strong> +62 21 1234 5678</p>
            <p><strong>Email:</strong> DonutStore@gmail.com</p>
            <p><strong>Jam Kerja:</strong> Mon-Fri, 9:00 AM - 5:00 PM</p>
        </div>
        <form action="/contact" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Catatan" rows="5" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>
    <footer>
        <div>
            <p>&copy; 2025 Donut Shop. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
