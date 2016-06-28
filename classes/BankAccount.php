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

        $account->balance = (int) (string)$account->balance + (int) (string)$amount;
        $this->balance = (int) (string)$this->balance - (int) (string)$amount;
    }


      public function withdraw(Money $amount)
    {
        //implement this method
        if((int) (string)$amount > (int) (string)$this->balance) throw new Exception("Withdrawl amount larger than balance", 1);
        

        $this->balance =  (int) (string)$this->balance - (int) (string)$amount;


    }
}