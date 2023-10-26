<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class TeamSearch extends Component
{
    public string $search = '';

    /**
     * Main render function.
     * @return Factory|View
     */
    public function render()
    {
        return view('livewire.team-search', [
            'teams' => Team::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('name')
                ->get()
        ]);
    }

    /**
     * Dispatch a show event to the TeamView component.
     * @param mixed $id
     * @return void
     */
    public function show($id)
    {
        $this->dispatch('show', id: $id);
    }

    /**
     * Clear the search field.
     * @return void
     */
    public function clear()
    {
        $this->reset('search');
    }

    /**
     * Dispatch a reset-id-view event to the TeamView component.
     * @return void
     */
    public function updatedSearch()
    {
        if ($this->search != '') {
            $this->dispatch('reset-id-view');
        }
    }

}
