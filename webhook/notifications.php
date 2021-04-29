<?php
// SDK de Mercado Pago
require __DIR__ .  '../../vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-2572771298846850-120119-a50dbddca35ac9b7e15118d47b111b5a-681067803");
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");
//MercadoPago\SDK::setPublicKey("APP_USR-a98b17ae-47a6-4a35-b92d-01919002b97e");
$input = trim(file_get_contents('php://input'), true);
$info = json_decode($input);

if (isset($info->type)) {
    switch($info->type) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($info->id);
            $er_number = $payment->external_reference;
            $data = array(
                "id" => 12345,
                "live_mode" => $payment->live_mode,
                "type" => $payment->operation_type,
                "data_created" => $payment->date_created,
                "data" => array(
                    "id" => $payment->id
                )
            );
            echo json_encode($data);
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
}
