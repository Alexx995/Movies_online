<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'year', 'user_id', 'imdb_rating'
    ];

    public function watchlist(): BelongsToMany
    {
        return $this->belongsToMany(Watchlist::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
