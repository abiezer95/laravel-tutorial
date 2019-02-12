<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function creando_nuevo_usuario(){
        $this->from('usuarios/nuevo')->post('/usuarios/crear', [
            'name' => 'abiezer',
            'email' => 'reyes@none.com',
            'password' => '1234'
        ])
        ->assertSee('Procesando')
        ->assertRedirect(route('users.index')); //aqui revisamos redirecciones

        $this->assertCredentials([ //assertCredentials con esto podemos verificar la password encriptada
            'name' => 'abiezer',
            'email' => 'reyes@none.com',
            'password' => '1234'
        ]);
    }
}
