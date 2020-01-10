<?php


class Chicken
{
    public $id = 0;
    public $work_product = 0;

    public function getWorkProduct()
    {
        return rand(0, 1);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}