<?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');

?>
<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51OM4PTBk47Wx8X0bby7KWTBCOe3XIAiNaxVWVFY75oN6M0JyVuVlZS0aNdc1LP8yXkuYSkpO7gjBxjtGwo0eYfPH00AQARy6W7",
        "publishableKey" => "pk_test_51OM4PTBk47Wx8X0btU101Q6dEavpLdgx4Tx0yQb2cME6QSH1mspsNbeonmgncbjZoB6oh069mshsNObddAsoT9tI00AYdmRvOA"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>