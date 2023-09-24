<?php

namespace App\Livewire;

use Livewire\Component;

class Score extends Component
{
    public string $logo = '';
    public string $name = '';
    public string $visitorName = '';
    public string $teamMode = '';
    public string $result = '';
    public int $homeScore = 0;
    public int $visitorScore = 0;

    public function render()
    {
        return view('livewire.score', [
            'team_name'     => $this->name,
            'home_score'    => $this->homeScore,
            'visitor_score' => $this->visitorScore,
            'result'        => $this->checkScore(),
            'logo'          => $this->logo,
            'name'          => $this->name,
            'team_mode'     => $this->teamMode,
            'visitor_name'  => $this->visitorName,
        ]);
    }

    public function increment(string $vote)
    {
        if ($vote === 'visitor' && $this->visitorScore < 3 && $this->homeScore < 3) {
            $this->visitorScore++;
        }
        if ($vote === 'home' && $this->homeScore < 3 && $this->visitorScore < 3) {
            $this->homeScore++;
        }
    }

    public function decrement(string $vote)
    {
        if ($vote === 'visitor' && $this->visitorScore > 0 && $this->homeScore < 3) {
            $this->visitorScore--;
        }
        if ($vote === 'home' && $this->homeScore > 0 && $this->visitorScore < 3) {
            $this->homeScore--;
        }
    }

    public function checkScore()
    {
        if ($this->visitorScore === 3) {
            $this->result = 'Visitor Winner';
        } elseif ($this->visitorScore === $this->homeScore) {
            $this->result = 'Draw';
        } elseif ($this->homeScore === 3) {
            $this->result = 'Home Winner';
        } elseif ($this->homeScore > $this->visitorScore) {
            $this->result = 'Home Team Average';
        } else {
            $this->result = 'Visitor Team Average';
        }
    }

}
