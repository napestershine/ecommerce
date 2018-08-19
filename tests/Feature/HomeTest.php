<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_access_home_page()
    {
        $response = $this->get('/');
        $response
            ->assertStatus(200)
            ->assertSee('title');
    }
}
