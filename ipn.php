<?php
    $payment = "Sin data";
    require __DIR__ .  '/vendor/autoload.php';
    MercadoPago\SDK::setAccessToken('APP_USR-2926550097213535-092911-5eded40868803c83f12e9eef1afa99fa-1160956296');
    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_POST["data"]["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan::find_by_id($_POST["data"]["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription::find_by_id($_POST["data"]["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice::find_by_id($_POST["data"]["id"]);
            break;
        case "point_integration_wh":
            // $_POST contiene la informaciòn relacionada a la notificaciòn.
            break;
    }
    $nombreArchivo = "datosIPN.txt";
    $archivo = fopen($nombreArchivo, "w");
    fwrite($archivo, $payment);
    fclose($archivo);
?>