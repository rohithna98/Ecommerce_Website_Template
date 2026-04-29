<?php $business_name = "SunGrid Solar Solutions"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - <?php echo $business_name; ?></title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">

<style>
body {font-family:'Open Sans'; margin:0; background:#F5F7FA;}
header {background:#0A3D62; color:#fff; padding:15px 40px; display:flex; justify-content:space-between;}
nav a {color:#fff; margin-left:20px; text-decoration:none;}
.section {padding:60px 40px; max-width:900px; margin:auto;}
h1,h2 {font-family:'Poppins';}
footer {background:#0A3D62; color:#fff; text-align:center; padding:20px;}
</style>
</head>

<body>

<header>
    <h2><?php echo $business_name; ?></h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="about.php">About</a>
        <a href="financing.php">Financing</a>
    </nav>
</header>

<section class="section">
    <h1>About Us</h1>

    <p><strong><?php echo $business_name; ?></strong> is committed to delivering affordable and sustainable solar energy solutions for homes and businesses.</p>

    <h2>Our Mission</h2>
    <p>To help customers reduce electricity costs while contributing to a cleaner environment.</p>

    <h2>Why Choose Us?</h2>
    <ul>
        <li>✔ Experienced solar professionals</li>
        <li>✔ High-quality equipment</li>
        <li>✔ Government subsidy assistance</li>
        <li>✔ End-to-end service</li>
    </ul>

    <h2>Our Vision</h2>
    <p>To become a leading solar provider in the region by delivering reliable and cost-effective energy solutions.</p>
</section>

<footer>
    <p>© <?php echo date("Y"); ?> <?php echo $business_name; ?></p>
</footer>

</body>
</html>