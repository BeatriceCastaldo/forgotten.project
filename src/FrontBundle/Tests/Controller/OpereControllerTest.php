<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OpereControllerTest extends WebTestCase
{
    public function testElenco()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/elenco');
    }

    public function testCreaopera()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/creaopera');
    }

    public function testEditopera()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editopera');
    }

    public function testDeleteopera()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteopera');
    }

}
