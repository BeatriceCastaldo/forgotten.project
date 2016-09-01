<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testRegistrati()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registrati');
    }

    public function testPswdimenticata()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pswdimenticata');
    }

}
