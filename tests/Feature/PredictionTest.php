<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Livewire\ThemeSwitcher;

class PredictionTest extends TestCase
{
    /** @test **/
    public function it_should_redirect_to_login_page(): void
    {
        $response = $this->get('/');
        $response->assertRedirect('/dashboard');
    }

    /** @test **/
    public function it_should_render_dashboard_predictions_page(): void
    {
        $this->actingAs(User::factory()->create());
        $this->get('/dashboard')
            ->assertStatus(200)
            ->assertSee('Predictions');
    }

}
