<?php

class DepTest extends TestCase {


    public function test_add_Dep()
    {


        $response = $this->call('POST', 'add_department',
            array(

                'name' => 'computer-bb',
                'short_name' => 'cs-b'

            ));

        $this->assertSessionHas('success');

    }
    public  function test_delete_Dep()
{
    $response = $this->call('GET', 'delete_department={id}');

    $this->assertSessionHas('success');
}
    public  function test_view_Dep()
    {
        $crawler = $this->client->request('GET', 'view_department');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
