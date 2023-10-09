<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Score extends Component
{
    public int $homeScore = 0;
    public string $teamHome = 'Home Team';
    public int $guestScore = 0;
    public string $teamGuest = 'Guest Team';
    public function render(): View
    {
        return view('livewire.score', [
            'guestScore' => $this->guestScore,
            'homeScore'  => $this->homeScore,
            'result'     => $this->matchResult(),
            'status'     => $this->matchStatus(),
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
        if ($this->guestScore > 0 && $this->homeScore < 3) {
            $this->guestScore--;
        }
    }

    public function decrementHome()
    {
        if ($this->homeScore > 0 && $this->guestScore < 3) {
            $this->homeScore--;
        }
    }


    public function matchResult()
    {
        if ($this->guestScore < 3 && $this->guestScore > $this->homeScore) {
            return $this->teamGuest . ' ' . 'Average';
        } elseif ($this->homeScore < 3 && $this->homeScore > $this->guestScore) {
            return $this->teamHome . ' ' . 'Average';
        } elseif ($this->guestScore == 3) {
            return $this->teamGuest . ' ' . 'Won';
        } elseif ($this->homeScore == 3) {
            return $this->teamHome . ' ' . 'Won';
        } else {
            return 'Draw';
        }
    }

    public function matchStatus()
    {
        if ($this->guestScore < 3 && $this->homeScore < 3) {
            return 'progress';
        } else {
            return 'final';
        }
    }
}
