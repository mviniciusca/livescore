<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Summary of events
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function homeEvents()
    {
        return $this->hasMany(Event::class, 'team_home_id');
    }

    public function guestEvents()
    {
        return $this->hasMany(Event::class, 'team_guest_id');
    }
}
