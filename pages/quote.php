<?php
// Basic config (you can expand later)
$business_name = "SolarVillage";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get a Quote | <?php echo $business_name; ?></title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Note the ../ to go up one folder -->
</head>
<body >
    <section class="cta" id="quote">
        <h2 >Get Your Free Solar Quote</h2>
        <form method="POST" action="../submit.php"> <!-- Action points to processing script -->
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Email Address" required><br>
            <input type="text" name="phone" placeholder="Phone Number" required><br>
        
            <select name="property">
                <option value="Home">Personal use</option>
                <option value="Commercial">Commercial</option>
            </select><br>

            <input type="text" name="bill" placeholder="Monthly Electricity Bill"><br>

            <button type="submit">Get My Quote</button>
        </form>
    </section>
</body>
</html>
