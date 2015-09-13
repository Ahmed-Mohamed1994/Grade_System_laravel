<?php

class TeacherTest extends TestCase {


    public function test_add_teacher()
    {


        $response = $this->call('POST', 'add_teacher',
            array(

                'name' => "dsadsadasdas5",
                'Address' => "fgdfgdfsfsddddasdfsadsadassdgdfgdfg",
                'date' => "04/08/2015",
                'Phone' => "0178w21258222dasdwww2555",
                'Mail' => "Hs8-a587sas5s12www12dasdasdasa7cdaadsl"

            ));

        $this->assertSessionHas('success');




    }
   /* public  function test_delete_teacher()
    {
        $response = $this->call('GET', 'delete_teacher={id}');

        $this->assertSessionHas('success');
    }

   public  function test_view_teacher()
    {
        $crawler = $this->client->request('GET', 'view_teacher');

        $this->assertTrue($this->client->getResponse()->isOk());
    }*/
}
