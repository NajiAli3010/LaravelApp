<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->withoutExceptionHandling();
        $admin = User::factory()->create(['admin' => 1]);
        $this->actingAs($admin);

        $response = $this->get('/admin');

        $response->assertStatus(200);
    }
}
