<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_create_product()
    {
        $user = User::factory()->create();
        $token = $user->createToken('auth_token')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => "Bearer $token"
        ])->postJson('/api/products', [
            'name' => 'Shoes',
            'price' => 100.50,
            'stock' => 10
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('products', ['name' => 'Shoes']);
    }
}
