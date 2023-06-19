<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PruebaRutaProductos extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_productos(): void
    {
        $response = $this->get('/productos');

        $response->assertStatus(200);
    }

    public function test_productosView(): void
    {
        $response = $this->get('/products-view');

        $response->assertStatus(200);
    }
    
}
