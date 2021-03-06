<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
//use Laravel\Scout\Searchable;

class ShortUrl extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'shorturls';

    protected $fillable = [
        'shorturl',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'shorturl',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function generateshorturl()
    {
        $shorturl = Str::random(7);
        return $shorturl;
    }
}
