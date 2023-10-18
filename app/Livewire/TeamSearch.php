<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamSearch extends Component
{
    public string $search = '';
    public function render()
    {
        return view('livewire.team-search', [
            'teams' => Team::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('name')
                ->get()
        ]);
    }
    public function clear()
    {
        $this->reset('search');
    }
}
