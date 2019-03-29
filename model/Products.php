<?php

namespace app\model;

class Products extends DbModel
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $image_name;

    /**
     * Products constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($id = null, $name = null, $description = null,
    $price = null, $image_name = null)
    {
        //parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image_name = $image_name;
    }
    public function __call($closuire, $args)
    {
        return call_user_func_array($this->{$closuire}, $args);
    }

    public static function getTableName()
    {
       return "products";
    }

}