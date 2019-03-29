<?php

namespace app\tests;

use \PHPUnit\Framework\TestCase;
use app\model\Users;

class UsersTest extends TestCase
{
    /**
    * @dataProvider providerIsAuth
    */
    public function testIsAuth($name) {
        $_SESSION['login'] = $name;
        $user = new Users(null, $name, '007', null);
        $this->assertTrue($user->isAuth());

        $_SESSION['login'] = null;
        $this->assertFalse($user->isAuth());
    }

    public function providerIsAuth() {
        return array (
            array('Ivan'),
            array('Peter_J12'),
            array(888)
        );
    }

    /**
    * @dataProvider providerGetName
    */
    public function testGetName($name) {
        $_SESSION['login'] = $name;
        $user = new Users(null, $name, '007', null);
        $this->assertEquals($_SESSION['login'], $user->getName());

        $_SESSION['login'] = null;
        $this->assertEquals('Гость', $user->getName());
    }

    public function providerGetName() {
        return array (
            array('Ivan'),
            array('Peter_J12'),
            array('888')
        );
    }
    
    
}

