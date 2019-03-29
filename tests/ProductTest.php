<?php

namespace app\tests;

use \PHPUnit\Framework\TestCase;
use app\model\Products;

class ProductTest extends TestCase
{
    public function testProduct() {
        $name = "Чай";
        $product = new Products(null, $name, "description", 111, "JJJ.jpg");
        $this->assertEquals($name, $product->name);
    }
}

class UsersTest extends TestCase
{

    public function testIsAuth(){
        $_SESSION['login'] = 'Ivan';
        $user = new Users(null, 'Ivan', '007');
        $this->assertTrue($user->isAuth());
    }
    
}

