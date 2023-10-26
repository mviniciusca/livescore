<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Illuminate\View\Factory;

class TeamView extends Component
{
    public $id;
    /**
     * Main render function.
     * @return Factory|View
     */
    public function render()
    {
        return view('livewire.team-view', [
            'team' => Team::find($this->id)
        ]);
    }

    #[On('show')]

    /**
     * Show the team with the given id.
     * @param mixed $id
     * @return void
     */
    public function show($id)
    {
        $this->id = $id;
    }

    #[On('reset-id-view')]

    /**
     * Reset the id property.
     * @return void
     */
    public function resetId()
    {
        $this->id = null;
    }
}
