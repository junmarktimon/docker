<?php

use PHPUnit\Framework\TestCase;

class CrudTest extends TestCase{

	public function TestInsert(){

		$crud = new App\Crud;
		$result = $crud->insert('user','user123456');
		$this->asserEquals(TRUE, $result);
	}
}


?>