<?php

use Zizaco\FactoryMuff\Facade\FactoryMuff;

class PostTest extends TestCase {

	public function testUserIdIsRequired()
	{
		//create post
		$post = new Post;
		//set the body
		$post->body = "Yada, yada, yada";
		//post should not save
		$this->assertFalse($post->save());
		//save the errors
		$errors = $post->errors()->all();
		//there should be 1 error
		$this->assertCount(1,$errors);
		//the error should be set
		$this->assertEquals($errors[0], "The body field is required.");

	}

	public function testPostSavesCorrectly()
	{
		//create a new post
		$post = FactoryMuff::create('Post');
		//save it
		$this->assertTrue($post->save());
	}
	
}