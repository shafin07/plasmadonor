<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	
	public function testLogin(){
		$employees = new \App\Models\employees([]);
		$this->assertEquals("Login success", $employees->login("shafin","123"));
	}

	public function testSearchByBloodGroup(){
		$donors = new \App\Models\donors([]);
		$this->assertEquals(1, $donors->bloodType("A+"));
	}
		
	public function testSearchByUserID(){
		$users = new \App\Models\users([]);
		$this->assertEquals("Dhaka", $users->searchID(1));
	}	
	
}