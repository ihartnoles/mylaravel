<?php

class UserTest extends TestCase{

	public function testThatTrueIsTrue()
	{
		$this->assertTrue(true);
	}

	public function testUsernameIsRequired()
	{
		//create a user
		$user = new User;
		$user->email="phil@ipbrown.com";
		$user->password="password";
		$user->password_confirmation = "password";

		//user should not save
		$this->assertFalse($user->save());

		//save the errors
		$errors = $user->errors()->all();

		//there should be 1 error
		$this->assertcount(1,$errors);

		//the usernam error should be set
		$this->assertEquals($errors[0],"The username field is required.");
	}
}