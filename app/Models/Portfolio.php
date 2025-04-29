<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'artisan_id',
        'path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'artisan_id');
    }
}
