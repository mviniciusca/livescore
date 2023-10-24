<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\Attributes\On;

class TeamView extends Component
{
    public $id;
    public function render()
    {
        return view('livewire.team-view', [
            'team' => Team::find($this->id)
        ]);
    }

    #[On('show')]
    public function show($id)
    {
        $this->id = $id;
    }

    public function clear()
    {
        $this->reset('id');
    }
}
