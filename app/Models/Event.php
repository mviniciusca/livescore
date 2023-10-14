<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function teamHome()
    {
        return $this->belongsTo(Team::class, 'team_home_id');
    }

    public function teamGuest()
    {
        return $this->belongsTo(Team::class, 'team_guest_id');
    }
}
