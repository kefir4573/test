<?php


class Cow
{   //свойства
    public $id = 0;
    public $work_product = 0;

    public function getWorkProduct()
    {
        return rand(8, 12);
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