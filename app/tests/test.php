<?php

class ProfTest extends TestCase
{


    public function test_login()
    {



        $this->client->request('GET', 'login=Professor');

       // $this->assertTrue($this->client->getResponse()->isOk());

        $this->assertSessionHas('type');


    }

    public function test_logout()
    {

        $this->client->request('GET', 'logout');
        $this->flushSession();
    }
}
