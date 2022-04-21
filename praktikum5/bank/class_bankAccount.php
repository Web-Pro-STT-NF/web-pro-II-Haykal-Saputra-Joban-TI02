<?php 
require_once "class_account.php";

class BankAccount extends Account{
    public $customer;

    function __construct($no,$saldo_awal,$customer)
    {
        parent::__construct($no,$saldo_awal);
        $this->customer = $customer;
    }
    function cetak()
    {
        parent::cetak();
        echo "<br/>Customer : " . $this->customer;
        echo "<br/>";
    } 
    function transfer($akun,$uang)
    {
        $akun->deposit($uang);
        $this->withdraw($uang);
    }

}
