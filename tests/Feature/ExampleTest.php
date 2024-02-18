<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response_index_url(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_portfolio_url(): void
    {
        $response = $this->get('/portfolio');

        $response->assertStatus(200);
    }
    
    public function test_the_application_returns_a_successful_response_about_url(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
    
    public function test_the_application_returns_a_successful_response_contact_url(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
 
   
    
}
