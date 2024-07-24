<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexPageTest extends TestCase
{
    public function test_it_has_an_index_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
