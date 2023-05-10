<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        // affichage des clients
        $response = $this->get('/');
        $response->assertStatus(200);

        // test d'insertion
        $this->withHeaders(["X-Header"=>"value"])
        ->post("api/Client",["nom"=>"unit","ville"=>"unit","telephone"=>"unit",]);
        $response->assertStatus(200);

         //test de mise à jour
         $this->withHeaders(["X-Header"=>"value"])
         ->put("api/Client/{id}",["nom"=>"unit","ville"=>"unit","telephone"=>"unit"]);
         $response->assertStatus(200);

         //test de suppresion
        $this->delete("api/Client/{id}");
        $response->assertStatus(200);
    }
}
