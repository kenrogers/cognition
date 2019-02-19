<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_view_the_landing_page()
    {
        $this->withoutExceptionHandling();
        $this->get('/')->assertSee('Cognition');
    }
}
