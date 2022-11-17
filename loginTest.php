<?php
use PHPUnit\Framework\TestCase;
require 'login.php';

class loginTest extends TestCase {
	
$array = explode("\n", file_get_contents('10-million-password-list-top-1000.txt') );

	public function testIfSuccess(): void {
		
		$this->assertTrue(in_array $password, array);
		
	}
	public function testIfUnsuccessful(): void {
		$this->assertFalse(''));
	}
}
?>