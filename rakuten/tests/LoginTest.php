<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIcanLogin()
    {
        $this->login('patrick.henry@rakuten.com', 'TaylorSwiftE>')
            ->seePageIs('/welcome')
            ->see('Dashboard');
    }

    public function testLoginFailsIfDetailsIncorrect()
    {
        $this->login('patrick.henry@rakuten.com', 'KanyeWestE>')
            ->seePageIs('/login')
            ->see('Account details are incorrect');
    }

    private function login($email, $password)
    {
        return $this->visit('/login')
            ->see('Login')
            ->type($email, 'email')
            ->type($password, 'password')
            ->press('Login');
    }
}
