<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{ 
     public function testStatusCode()
     {
         $responce = $this->get('/home');
         $responce->assertStatus(200);
     }
     public function testBody()
     {
         $responce = $this->get('/home');
         $responce->assertSeeText("こんにちは");
     }
}
