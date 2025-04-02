<?php

namespace Tests\Feature;

use App\Models\Flight;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FlightApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_flights()
    {
        // Crée 3 vols en utilisant la factory
        $flights = Flight::factory()->count(3)->create();
        
        $response = $this->getJson('/api/flights');
        
        $response->assertStatus(200)
                 ->assertJsonCount(3)
                 ->assertJson($flights->toArray());
    }

    public function test_can_create_flight()
    {
        $flightData = Flight::factory()->make()->toArray();
        
        $response = $this->postJson('/api/flights', $flightData);
        
        $response->assertStatus(201)
                 ->assertJson($flightData);
    }
}