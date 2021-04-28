<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-107115299664991-042303-135f394a2b9c6e06be6ac5506275fcc0-41659094');


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 500;
//$item->category_id = "home";
$item->currency_id = "COP";
$preference->items = array($item);

$preference->back_urls = array(
    "success" => "https://www.tu-sitio/success",
    "failure" => "http://www.tu-sitio/failure",
    "pending" => "http://www.tu-sitio/pending"
);

$preference->save();

?>
<form action="/procesar-pago" method="POST">
    <script
            src="https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js"
            data-preference-id="<?php echo $preference->id; ?>">
    </script>
</form>
