<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testfile extends TestCase
{
    /**
     * @test void
     */
    public function testExample()
    {
        $this->get('/test/5')
        	->assertStatus(200)
        	->assertSee('hola mundo soy el numero 5')
        ;
    } 

	 /**
     * @test void
     */
    public function testExample2()
    {
        $this->get('/test2')
        	->assertStatus(200)
        	->assertSee('listo')
        ;
    }
}
