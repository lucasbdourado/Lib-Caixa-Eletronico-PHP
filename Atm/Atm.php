<?php

namespace Atm;
class Atm
{
    public Bill $bill;

    public function bill(){
        $this->bill = new Bill();

        return $this->bill;
    }

    public function withdraw()
    {
        return new Withdraw($this->bill->bills);
    }
}

class Bill{
    public $bills = [];

    public function addBill($nota)
    {
        $this->bills[] = $nota;

        return $this;
    }
}

class Withdraw{

    private $bills;

    public $result = [];

    public function __construct($bills)
    {
        $this->bills = $bills;
    }

    public function ammount($ammount)
    {
        $total = $ammount;

        foreach ($this->bills as $bill) {
            $quantity = intval($total / $bill);

            $total = $total - ($quantity * $bill);

            $this->result[$bill] = $quantity;
        }

        return $this->result;
    }
}