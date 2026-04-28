<?php
// Basic config (you can expand later)
$business_name = "SolarVillage";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $business_name; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!--   Google Fonts 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background-color: #F5F7FA;
            color: #2C3E50;
        }

        header {
            background: #FF9550 ;
            padding: 15px 40px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn {
            background: #27AE60;
            color: white;
            padding: 10px 18px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            padding: 80px 40px;
            text-align: center;
            background: linear-gradient(rgba(10,61,98,0.8), rgba(10,61,98,0.8)),
                        url('solar.jpg') no-repeat center/cover;
            color: white;
        }

        .hero h2 {
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
        }

        .section {
            padding: 60px 40px;
            text-align: center;
        }

        .services {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .cta {
            background: #27AE60;
            color: white;
            padding: 40px;
        }

        footer {
            background: #0A3D62;
            color: white;
            text-align: center;
            padding: 20px;
        }

        form input, form select {
            padding: 10px;
            margin: 10px;
            width: 250px;
        }

        form button {
            background: #F2C94C;
            border: none;
            padding: 12px 20px;
            font-weight: bold;
            cursor: pointer;
        }

        @media(max-width: 768px){
            .services {
                flex-direction: column;
                align-items: center;
            }
        }
    </style> -->
        <link rel="stylesheet" href="css/style.css">    
</head>

<body>

<!-- Header -->
<header>
    <h1><?php echo $business_name; ?></h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Financing</a>
        <a href="#" class="btn">Get Quote</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <h2>Cut Your Electricity Bills with Solar Energy</h2>
    <p>Affordable and reliable solar solutions for homes and businesses</p>
    <a href="#quote" class="btn">Get a Free Quote</a>
</section>

<!-- Services -->
<section class="section">
    <h2>Our Services</h2>
    <div class="services">
        <div class="card">
            <h3>Installation</h3>
            <p>High-quality solar panel installation for homes & businesses.</p>
        </div>
        <div class="card">
            <h3>Maintenance</h3>
            <p>Keep your system efficient with regular maintenance.</p>
        </div>
        <div class="card">
            <h3>Consultation</h3>
            <p>Expert advice to design the best solar system for you.</p>
        </div>
    </div>
</section>

    <div class="whatsapp-btn-container">
        <a class="whatsapp-btn" href="https://wa.me/918074930053"><i class="fab fa-whatsapp"></i></a>
        <span>Contact Us</span>
    </div>

    <!-- Why Choose Us -->
<section class="section">
    <h2>Why Choose Us?</h2>
    <p>✔ Save up to 70% on electricity bills</p>
    <p>✔ Government subsidy assistance</p>
    <p>✔ Trusted & certified professionals</p>
</section>

<!-- Quote Form -->
<section class="cta" id="quote">
    <h2>Get Your Free Solar Quote</h2>

    <form method="POST" action="submit.php">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Email Address" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        
        <select name="property">
            <option>Home</option>
            <option>Commercial</option>
        </select><br>

        <input type="text" name="bill" placeholder="Monthly Electricity Bill"><br>

        <button type="submit">Get My Quote</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <p>© <?php echo date("Y"); ?> <?php echo $business_name; ?> | All Rights Reserved</p>
</footer>
</body>
</html>