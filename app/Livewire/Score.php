<?php

namespace App\Livewire;

use Livewire\Component;

class Score extends Component
{
    public string $name = '';
    public int $homeScore = 0;
    public int $guestScore = 0;
    public string $result = '';

    public function render()
    {
        return view('livewire.score', [
            'team_name'   => $this->name,
            'home_score'  => $this->homeScore,
            'guest_score' => $this->guestScore,
            'result'      => $this->checkScore(),
        ]);
    }

    public function increment(string $vote)
    {
        if ($vote === 'guest' && $this->guestScore < 3 && $this->homeScore < 3) {
            $this->guestScore++;
        }
        if ($vote === 'home' && $this->homeScore < 3 && $this->guestScore < 3) {
            $this->homeScore++;
        }
    }

    public function decrement(string $vote)
    {
        if ($vote === 'guest' && $this->guestScore > 0 && $this->homeScore < 3) {
            $this->guestScore--;
        }
        if ($vote === 'home' && $this->homeScore > 0 && $this->guestScore < 3) {
            $this->homeScore--;
        }
    }

    public function checkScore()
    {
        if ($this->guestScore === 3) {
            $this->result = 'Guest Winner';
        } elseif ($this->guestScore === $this->homeScore) {
            $this->result = 'Draw';
        } elseif ($this->homeScore === 3) {
            $this->result = 'Home Winner';
        } elseif ($this->homeScore > $this->guestScore) {
            $this->result = 'Home Team Average';
        } else {
            $this->result = 'Guest Team Average';
        }
    }

}
