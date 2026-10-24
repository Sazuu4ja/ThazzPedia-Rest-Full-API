<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {
    protected $fillable = ['name', 'developer'];

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}