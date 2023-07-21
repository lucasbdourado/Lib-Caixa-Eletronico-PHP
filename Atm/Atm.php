<?php

namespace Atm;
class Atm
{
    private $bills = [];
    private $result = [];


    public function bill(){
        return $this;
    }
    public function addBill($nota)
    {
        $this->bills[] = $nota;



        return $this;
    }

    public function withdraw()
    {
        return $this;
    }
    public function ammount($ammount)
    {
        $this->result = [];

        $total = $ammount;

        foreach ($this->bills as $bill) {
            $quantity = intval($total / $bill);

            $total = $total - ($quantity * $bill);

            $this->result[$bill] = $quantity;
        }

        return $this->result;
    }
}