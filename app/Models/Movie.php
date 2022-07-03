<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title','genre'];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');

    }
}