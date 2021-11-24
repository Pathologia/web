<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/public');
        $response->assertStatus(200);
    }
    public function http_erd()
    {
        $response = $this->get('/docs/erd.html');
        $response->assertStatus(200);
    }
    public function http_swagger()
    {
        $response = $this->get('/docs/api');
        $response->assertStatus(200);
    }
}
