<?php $business_name = "SolarVillage"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services - <?php echo $business_name; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
    
<style>
        body {
            font-family:'Open Sans';
            margin:0;
            background:#F5F7FA;
        }
        
        header {
            background:#0A3D62;
            color:#fff;
            padding:15px 20px;
            display:flex;
            justify-content:space-between;
            align-items: center;
        }
        
        nav a {
            color:#fff;
            margin-left:20px;
            text-decoration:none;
        }
        
        .section {
            padding:60px 40px;
            text-align:center;
        }
        
        .card {
            background:#fff;
            padding:25px;
            margin:20px auto;
            max-width:800px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }
        
        .btn {
            background:#27AE60;
            color:#fff; padding:10px 20px;
            text-decoration:none;
            border-radius:5px;
        }
        
        footer {
            background:#0A3D62;
            color:#fff;
            text-align:center;
            padding:20px;
        }

</style>

</head>

<body>

<header>
        <h1><?php echo $business_name; ?></h1>
    <nav>
        <a href="../index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="#">About</a>
        <a href="#">Financing</a>
        <a href="pages/quote.php">Get Quote </a>

    </nav>
</header>

<section class="section">
    <h1>Our Services</h1>

    <div class="card">
        <h2>Solar Installation</h2>
        <p>We provide residential and commercial solar panel installations using high-efficiency technology.</p>
        <p><strong>Process:</strong> Site Visit → Design → Installation → Activation</p>
        <a href="index.php#quote" class="btn">Get Installation Quote</a>
    </div>

    <div class="card">
        <h2>Maintenance & Repairs</h2>
        <p>Ensure peak performance with regular cleaning, inspections, and repair services.</p>
        <a href="index.php#quote" class="btn">Book Maintenance</a>
    </div>

    <div class="card">
        <h2>Consultation & Energy Audit</h2>
        <p>We analyze your electricity usage and design the most cost-effective solar solution.</p>
        <a href="index.php#quote" class="btn">Talk to an Expert</a>
    </div>
</section>

<footer>
    <p>© <?php echo date("Y"); ?> <?php echo $business_name; ?></p>
</footer>

</body>
</html>