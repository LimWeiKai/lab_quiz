<?php
use PHPUnit\Framework\TestCase;
require 'login.php';

class loginTest extends TestCase {

	public function testIfLoginSuccess(): void {
		
		$this->assertTrue(checkAccount("ben", "ben23"));
		
	}
	public function testIfLoginUnsuccessful(): void {
		$this->assertFalse(checkAccount("admin", "admin"));
	}
}
?>