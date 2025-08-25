<?php 
define('TICKET_PRICE', 12.50);
define('THEATER_NAME', 'OTC Cinema');

$customer = "Brian Van Halbert";
$tickets = "3";
$hasCoupon = true;
$snack = null;
$subtotal;
$finaltotal;
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
    <p><?php echo "Name: " . $customer ?></p> <!-- concatination -->
    <p><?php echo "Ticket(s): $tickets" ?></p> <!-- interpolation -->

    <!--casting --> 
    <p>Type - $tickets: <?php echo gettype($tickets)?></p>
    <?php $tickets=(int)$tickets?>
    <p>New Type - $tickets: <?php echo gettype($tickets)?></p>

    <!-- price calculation-->
    <p><?php
        $subtotal = $tickets*TICKET_PRICE;
        $finaltotal = $subtotal;
        if($hasCoupon){
            $finaltotal = $subtotal - 2.00;
            echo "YAY! Discount applied!";

        }else{
            echo "No Discounts Applied";
        }
    ?></p>
    <table>
        <tr>
            <th>Subtotal: <th>
            <td><?php echo $subtotal?><td>
        </tr>
        <tr>
            <th>Discount: <th>
            <td><?php echo "-$2.00"?><td>
        </tr>
        <tr>
            <th>Total: <th>
            <td><?php echo $finaltotal?><td>
        </tr>
    </table>
    <!--Null Check-->
    <p>
        <?php 
            if(is_null($snack)){
                echo "No snack selected";
            }else{
                echo "Snack selected!";
            }
        ?>
    </p>

</body>
</html>