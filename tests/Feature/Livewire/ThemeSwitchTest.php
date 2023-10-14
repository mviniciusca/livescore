<?php

namespace Tests\Feature\Livewire;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Livewire\ThemeSwitch;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThemeSwitchTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ThemeSwitch::class)
            ->assertStatus(200);
    }

    /** @test **/
    public function it_should_render_theme_switch_on_dashboard_page(): void
    {
        $this->actingAs(User::factory()->create());
        $this->get(route('dashboard'))
            ->assertSeeLivewire('theme-switch');
    }
}
