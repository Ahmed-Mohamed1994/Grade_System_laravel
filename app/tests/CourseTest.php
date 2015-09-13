<?php

class CourseTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testAddCourse()
	{
		$response=$this->call('POST', 'add_course', array(
			'number'=>'8465',
			'dep'=>'CS',
			'name'=>'hassan'
			));
		$this->assertSessionHas('success');
	}

	public function testDeleteCourse()
	{
		$response=$this->call('GET', 'delete_course={$id}');
		$this->assertSessionHas('success');
	}



	public function testviewCourse()
	{
		$crawler = $this->client->request('GET', 'view_courses');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
