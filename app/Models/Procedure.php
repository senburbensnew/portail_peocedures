<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable = ['nom', 'description', 'user_id'];

    public function etapes()
    {
        return $this->hasMany(Etape::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

