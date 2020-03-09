<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players() {
        return $this->belongsToMany('App\Player', 'players_teams', 'team_id', 'player_id');
    }
}
