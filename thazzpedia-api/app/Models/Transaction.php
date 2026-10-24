<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    protected $fillable = ['game_id', 'player_id', 'nominal', 'proof_file', 'status'];

    public function game() {
        return $this->belongsTo(Game::class);
    }
}