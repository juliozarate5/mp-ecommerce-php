<?php
    // SDK de Mercado Pago
 /*   require __DIR__ .  '/vendor/autoload.php';
    // credentials
    MercadoPago\SDK::setAccessToken('APP_USR-2572771298846850-120119-a50dbddca35ac9b7e15118d47b111b5a-681067803');

    MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    $preference = new MercadoPago\Preference();
    // Payment Method
    $preference->payment_methods = array(
      "excluded_payment_methods" => array(
        array("id" => "amex")
      ),
      "excluded_payment_types" => array(
        array("id" => "atm")
      ),
      "installments" => 6
    );
    $payment_method = new MercadoPago\PaymentMethod();
    $payment_method->excluded_payment_methods = array(
          array("id" => "amex")
    );
    $payment_method->excluded_payment_types = array(
          array("id" => "atm")
    );
    $preference->payment_methods = array($payment_method);
    // payer
    $payer = new MercadoPago\Payer();
    $payer->id = "681094118"; 
    $payer->name = "Lalo Landa";
    $payer->email = "test_user_83958037@testuser.com";
    $payer->phone = array(
      "area_code" => "52", 
      "number" => "5549737300"
    );
    $payer->address = array(
      "street_name" => "Insurgentes Sur",
      "street_number" => 1602,
      "zip_code" => "03940"
    );
    $preference->payer = $payer;

    # Crea ítems en la preferencia
    $item = new MercadoPago\Item;
    $item->id = 1234;
    $item->title = "Item de Prueba 1";
    $item->description = "Dispositivo móvil de Tienda e-commerce";
    $item->picture_url = "https://juliozarate5-mp-commerce-php.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg";
    $item->quantity = 1;
    $item->unit_price = 11.96;

    $preference->items = array($item);

    $preference->external_reference = "juliozarate5@hotmail.com";
    // variables success
    $collector_id = "681067803";
    $external_reference = $preference->external_reference;
    $preference_id = $preference->id;
    $SITE_ID = "MCO";

    $preference->back_urls = array(
        "success" => "https://juliozarate5-mp-commerce-php.herokuapp.com/success.php?collection_id=".$collector_id."&collection_status=approved&external_refe
        rence=".$external_reference."&payment_type=credit_card&preference_id=".$preference_id."&site_id=".$SITE_ID."&processing_mode=aggregator&merchant_account_id=null",
        "failure" => "https://juliozarate5-mp-commerce-php.herokuapp.com/failure.php",
        "pending" => "https://juliozarate5-mp-commerce-php.herokuapp.com/pending.php"
    );
    $preference->auto_return = "approved";
    $preference->notification_url = "https://juliozarate5-mp-commerce-php.herokuapp.com/notifications.php";
    # Guardar y postear la preferencia
    $preference->save();    */
?>
<!--
<script
  data-button-label="Pagar la compra"
  src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
  data-preference-id="<?php echo $preference_id; ?>">
</script>
-->

