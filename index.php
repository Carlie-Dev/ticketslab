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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
        <div class = "border border-white border-5 d-flex d-flex justify-content-center shadow p-3 mb-5 rounded">
            <h1><?php echo THEATER_NAME?></h1>
        </div>
    
   
        <div>
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
        </div>

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