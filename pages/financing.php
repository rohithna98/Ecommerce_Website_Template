<?php $business_name = "SunGrid Solar Solutions"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Solar Financing - <?php echo $business_name; ?></title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">

<style>
body {font-family:'Open Sans'; margin:0; background:#F5F7FA;}
header {background:#0A3D62; color:#fff; padding:15px 40px; display:flex; justify-content:space-between;}
nav a {color:#fff; margin-left:20px; text-decoration:none;}
.section {padding:60px 40px; text-align:center;}
.card {background:#fff; padding:25px; margin:20px auto; max-width:800px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.1);}
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
    <h1>Solar Financing Options</h1>

    <div class="card">
        <h2>Cash Purchase</h2>
        <p>Pay upfront and enjoy maximum savings over time with zero interest.</p>
    </div>

    <div class="card">
        <h2>Solar Loan</h2>
        <p>Install solar with easy monthly EMIs and start saving immediately.</p>
    </div>

    <div class="card">
        <h2>Government Subsidy</h2>
        <p>Take advantage of government incentives to reduce installation costs.</p>
    </div>

    <div class="card">
        <h2>Return on Investment</h2>
        <p>Most systems pay for themselves within 3–5 years while lasting 20+ years.</p>
    </div>
</section>

<footer>
    <p>© <?php echo date("Y"); ?> <?php echo $business_name; ?></p>
</footer>

</body>
</html>