<?php

namespace App\Livewire;

use Livewire\Component;

class Score extends Component
{
    public int $homeScore = 0;
    public int $visitScore = 0;
    public function render()
    {
        return view('livewire.score');
    }

    public function increment()
    {
        //
    }

    public function decrement()
    {
        //
    }

    public function scoreCalculator()
    {
        //
    }

}
