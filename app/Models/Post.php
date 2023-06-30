<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'published_at',
        'user_id'
    ];

    protected $cast = [
        'published_at' => 'datetime'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }



    public function getFormattedDate() 
    {
        $date = Carbon::parse($this->published_at);
        return $date->format('F j, Y');
    }
    

    public function shortBody(): string 
    {
        return Str::words(strip_tags($this->body), 55);
    }
}
