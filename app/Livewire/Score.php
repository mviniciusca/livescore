<?php

namespace App\Livewire;

use Livewire\Component;

class Score extends Component
{
    public $guestScore = 0;
    public $homeScore = 0;

    public function render()
    {
        return view('livewire.score', [
            'guestScore' => $this->guestScore,
            'homeScore'  => $this->homeScore,
        ]);
    }

    public function incrementGuest()
    {
        if ($this->guestScore >= 0 && $this->guestScore < 3 && $this->homeScore < 3) {
            $this->guestScore++;
        }
    }

    public function incrementHome()
    {
        if ($this->homeScore >= 0 && $this->homeScore < 3 && $this->guestScore < 3) {
            $this->homeScore++;
        }
    }

    public function decrementGuest()
    {
        if ($this->guestScore > 0) {
            $this->guestScore--;
        }
    }

    public function decrementHome()
    {
        if ($this->homeScore > 0) {
            $this->homeScore--;
        }
    }
}
