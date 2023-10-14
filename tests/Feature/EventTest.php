<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventTest extends TestCase
{
    /** @test **/
    public function it_should_register_new_event(): void
    {
        $this->actingAs(User::factory()->create());
        $this->post(route('event.store'), [
            'name'          => 'Test Event',
            'team_home_id'  => 1,
            'team_guest_id' => 2,
            'score_home'    => 0,
            'score_guest'   => 0,
            'group'         => 'A',
            'location'      => 'Test Location',
            'start'         => '2021-01-01 00:00:00',
        ])
            ->assertValid()
            ->assertRedirect()
            ->assertSessionHas('success')
            ->assertSessionHasNoErrors();
    }

    /** @test **/
    public function it_should_delete_an_event(): void
    {
        $this->actingAs(User::factory()->create());
        $this->delete(route('event.destroy', 1))
            ->assertRedirect()
            ->assertSessionHas('success')
            ->assertSessionHasNoErrors();
    }

    /** @test **/
    public function it_should_not_register_new_event_if_not_authenticated(): void
    {
        $this->post(route('event.store'), [
            'name'          => 'Test Event',
            'team_home_id'  => 1,
            'team_guest_id' => 2,
            'score_home'    => 0,
            'score_guest'   => 0,
            'group'         => 'A',
            'location'      => 'Test Location',
            'start'         => '2021-01-01 00:00:00',
        ])
            ->assertRedirect(route('login'))
            ->assertSessionHasNoErrors();
    }

    /** @test **/
    public function it_should_not_delete_an_event_if_not_authenticated(): void
    {
        $this->delete(route('event.destroy', 1))
            ->assertRedirect(route('login'))
            ->assertSessionHasNoErrors();
    }

    /** @test **/
    public function it_should_update_event(): void
    {
        $this->actingAs(User::factory()->create());

        $this->patch(route('event.update'), [
            'id'            => 1,
            'team_home_id'  => 15,
            'team_guest_id' => 2,
            'score_home'    => 0,
            'score_guest'   => 0,
            'group'         => 'B',
            'location'      => 'Test Location',
            'start'         => '2021-01-01 00:00:00',
        ])
            ->assertValid()
            ->assertRedirect()
            ->assertSessionHas('success')
            ->assertSessionHasNoErrors();
        $this->assertDatabaseHas('events', [
            'team_home_id' => 15,
        ]);
    }

}
