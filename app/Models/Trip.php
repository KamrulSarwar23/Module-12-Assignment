<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat',
        'from',
        'to',
        'date'
    ];

    protected $casts = [
        'seat' => 'array'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
