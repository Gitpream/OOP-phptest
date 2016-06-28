<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        //implement this method
        $this->balance =  (int) (string)$this->balance + (int) (string)$amount;
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }


      public function withdraw(Money $amount)
    {
        //implement this method


    }
}