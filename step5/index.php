<?php 
// interfaces  

interface PaymentInterface {
    public function payNow();
}
interface LoginInterface {
    public function loginFirst();
}

class paypal implements PaymentInterface, LoginInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}
class BankTransfer implements PaymentInterface, LoginInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}
class Cash implements PaymentInterface {
    public function payNow() {}
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->loginFirst();
        $paymentType->payNow();
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);