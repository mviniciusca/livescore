<?php

namespace App\Livewire;

use Livewire\Component;

class ThemeSwitch extends Component
{
    public $active;

    public function mount()
    {
        $this->active = isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark';
    }
    public function render()
    {
        return view('livewire.themeSwitch', [
            'active' => $this->updatedActive(),
        ]);
    }

    /** create a cookie and set the value  */
    public function updatedActive()
    {
        if ($this->active) {
            // set cookie with dark value
            setcookie('theme', 'dark', time() + (86400 * 30), "/");
            // set session
            session([ 'theme' => 'dark' ]);
        } else {
            // set cookie with light value
            setcookie('theme', 'light', time() + (86400 * 30), "/");
            // set session
            session([ 'theme' => 'light' ]);
        }
    }
}
