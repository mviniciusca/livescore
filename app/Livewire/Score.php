<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Score extends Component
{
    public $guestTeamLogo = '';
    public $homeTeamLogo = '';
    public string $locale = '';
    public string $matchStatus = '';
    public string $group = '';
    public int $homeScore = 0;
    public string $teamHome = 'Home Team';
    public int $guestScore = 0;
    public string $teamGuest = 'Guest Team';
    public bool $endMatch = false;

    public function mount()
    {
        $this->guestTeamLogo = str_replace(' ', '-', strtolower($this->teamGuest));
        $this->homeTeamLogo  = str_replace(' ', '-', strtolower($this->teamHome));
    }
    public function render(): View
    {
        return view('livewire.score', [
            'guestScore' => $this->guestScore,
            'homeScore'  => $this->homeScore,
            'result'     => $this->matchResult(),
            'status'     => $this->matchStatus(),
            'endMatch'   => $this->endMatch,
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
            return $this->teamGuest . ' ' . 'Victory';
        } elseif ($this->homeScore == 3) {
            return $this->teamHome . ' ' . 'Victory';
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
