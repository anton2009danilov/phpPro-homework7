<?php

namespace app\model;
use app\engine\Db;


class Basket extends DbModel
{
    public $id;
    public $session_id;
    public $product_id;
    public $quantity;

    public function __construct($id = null, $session_id = null, $product_id = null, $quantity = null)
    {
        $this->id = $id;
        $this->session_id = $session_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }

    public static function getBasket($session) {
        $sql = "SELECT p.id id_prod, b.id id_basket, b.quantity, p.name, p.description, p.price
            FROM basket b, products p
            WHERE b.product_id = p.id 
            AND session_id = :session";
        
        return Db::getInstance()->queryAll($sql, ['session'=>$session]);
    }


    public static function getTableName()
    {
        return "basket";
    }
}