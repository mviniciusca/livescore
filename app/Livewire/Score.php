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
    public int $maxPoint = 3;
    public function mount()
    {
        $this->guestTeamLogo = str_replace(' ', '-', strtolower($this->teamGuest));
        $this->homeTeamLogo  = str_replace(' ', '-', strtolower($this->teamHome));
    }
    public function render(): View
    {
        return view('livewire.score', [
            'status'     => $this->matchStatus(),
            'result'     => $this->matchResult(),
            'endMatch'   => $this->endMatch,
            'maxPoint'   => $this->maxPoint,
            'homeScore'  => $this->homeScore,
            'guestScore' => $this->guestScore,
        ]);
    }

    public function incrementGuest()
    {
        if ($this->guestScore >= 0 && $this->guestScore < $this->maxPoint && $this->homeScore < $this->maxPoint) {
            $this->guestScore++;
        }
    }

    public function incrementHome()
    {
        if ($this->homeScore >= 0 && $this->homeScore < $this->maxPoint && $this->guestScore < $this->maxPoint) {
            $this->homeScore++;
        }
    }

    public function decrementGuest()
    {
        if ($this->guestScore > 0 && $this->homeScore < $this->maxPoint) {
            $this->guestScore--;
        }
    }

    public function decrementHome()
    {
        if ($this->homeScore > 0 && $this->guestScore < $this->maxPoint) {
            $this->homeScore--;
        }
    }


    public function matchResult()
    {
        if ($this->guestScore < 4 && $this->guestScore > $this->homeScore) {
            return $this->teamGuest . ' ' . 'Average';
        } elseif ($this->homeScore < $this->maxPoint && $this->homeScore > $this->guestScore) {
            return $this->teamHome . ' ' . 'Average';
        } elseif ($this->guestScore == $this->maxPoint) {
            return $this->teamGuest . ' ' . 'Victory';
        } elseif ($this->homeScore == $this->maxPoint) {
            return $this->teamHome . ' ' . 'Victory';
        } else {
            return 'Draw';
        }
    }

    public function matchStatus()
    {
        if ($this->guestScore < $this->maxPoint && $this->homeScore < $this->maxPoint) {
            return 'Match in progress';
        } else {
            return 'Final';
        }
    }

}
