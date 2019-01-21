<?php
// External class (not allowed to change) - Service
class PayPal {

    function __construct(){        
    }

    function sendPayment($amount){
        echo 'Paid using paypal :' . $amount;
    }
}


// Interface created
interface paymentAdapter {
    public function pay($amount);
}

// Adaptar implements 
class paypalAdapter implements paymentAdapter {

    private $paypal;

    public function __construct(PayPal $paypal){
        $this->paypal = $paypal;
    }

    public function pay($amount){
        $this->paypal->sendPayment($amount);
    }
}

// Client code

$paypal = new paypalAdapter(new PayPal());

$paypal->pay('2500');
echo PHP_EOL;


?>