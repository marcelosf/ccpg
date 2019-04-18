<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Get /relatorios must return status code 200
     *
     * @return void
     */
    public function testReportListUrl()
    {
        $response = $this->get('/relatorios');
        $response->assertStatus(200);
    }
}
