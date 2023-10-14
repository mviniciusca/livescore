<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamSearch extends Component
{
    public string $teamName = '';
    public function render()
    {
        return view('livewire.team-search', [
            'teams' => Team::where('name', 'like', '%' . $this->teamName . '%')->get()
        ]);
    }

    public function search()
    {
        $this->validate([
            'teamName' => 'required|min:3'
        ]);
        $this->emit('searchTeam', $this->teamName);
    }
}
