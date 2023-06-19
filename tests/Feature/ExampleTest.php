<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\ProductoController;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(500);
    }

    public function test_productos(): void
    {
        $response = $this->get('/productos');

        $response->assertStatus(403);
    }

    public function test_productosView(): void
    {
        $response = $this->get('/products-view');

        $response->assertStatus(500);
    }

    public function test_empleados(): void 
    {
        $response = $this->get('/empleados');

        $response->assertStatus(403);
    }
    
}
