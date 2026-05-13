<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Cake Delights</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        #logo {
            max-width: 120px; /* Adjust as needed */
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #000000;
            font-size: 2em;
        }
        p {
            color: #333333;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1.2em;
        }
        .contact-info {
            margin-top: 30px;
            text-align: center;
        }
        .contact-info p {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #ff8c00;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #e07d00;
        }
        footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <img src="CDNOBG.png" alt="Cake Delights Logo" id="logo">
    </header>

    <main>
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! For inquiries or to place an order, feel free to reach out.</p>
        
        <div class="contact-info">
            <p>Email: <a href="mailto:CakeDelightsyum@gmail.com">CakeDelightsyum@gmail.com</a></p>
            <p>Phone: <a href="tel:+09150946054">0915 094 6054</a></p>
        </div>

        <p>Experience the delight with our exquisite cakes and treats. Place your order today!</p>

        <a href="foods.php" class="btn">Order Now</a>
    </main>

    <footer>
        &copy; <?php echo date('Y'); ?> Cake Delights. All rights reserved.
    </footer>

    
</body>
</html>
