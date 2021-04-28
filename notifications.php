<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-2572771298846850-120119-a50dbddca35ac9b7e15118d47b111b5a-681067803");
//MercadoPago\SDK::setAccessToken("TEST-107115299664991-042303-2d51c38bd0058fb64bed4e386d46a20c-41659094");


switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($_POST["id"]);
        echo json_encode($payment);
        break;
    case "plan":
        $plan = MercadoPago\Plan::find_by_id($_POST["id"]);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription::find_by_id($_POST["id"]);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice::find_by_id($_POST["id"]);
        break;

}