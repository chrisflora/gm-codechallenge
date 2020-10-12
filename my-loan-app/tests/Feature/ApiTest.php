<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiEndpoint()
    {
		$this->json('GET', '/api/loanapp/1')
			->assertJson(['id' => 1])
			->assertStatus(200);
    }
}
