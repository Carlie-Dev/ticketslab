<?php 
define('TICKET_PRICE', 12.50);
define('THEATER_NAME', 'OTC Cinema');

$customer = "Brian Van Halbert";
$tickets = "2";
$hasCoupon = true;
$snack = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets Lab</title>
</head>
<body>
    <h1><?php echo THEATER_NAME?></h1>
    <?php echo "Name: " . $customer ?> <!-- concatination -->
    <p><?php echo "Ticket(s): $tickets" ?></p> <!-- interpolation -->
</body>
</html>