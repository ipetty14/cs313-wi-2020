<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team()
    {
        return $this->belongsToMany('App\Team', 'players_teams', 'player_id', 'team_id');
    }
}
