<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class pruebas extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function validacion()
    {
        $response = $this->post('/contacto',[
            'nombre' => ' ',
            'correo' => 'filomeno.com',
            'mensaje' => 'hoa',

        ]);

        $response->assertSessionHasErrors([
            'nombre',
            'correo',
            'mensaje',
        ]);
    }

    public function prellenado(){
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('Maria',$response['nombre']);
    }

    public function page_contacto(){
        $response=$this->get('/contacto');
        $response->assertStatus(200);
        $response->assertSeeText(['nombre','correo','mensaje']);
    }
}
