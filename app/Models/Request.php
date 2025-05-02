<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'artisan_id',
        'client_id',
        'title',
        'description',
        'status',
        'budget',
        'image',
    ];

    public function artisan()
    {
        return $this->belongsTo(User::class, 'artisan_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function messages(){
        return $this->hasMany(Message::class, 'request_id');
    }
}
