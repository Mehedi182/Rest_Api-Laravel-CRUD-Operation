<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $hidden = [
        'laravel_through_key',
        'created_at',
        'upadated_at',

    ];
    
    public function book(){
        return $this->hasManyThrough(
            '\App\Models\book',
            '\App\Models\BookAuthor',
            'author_id',
            'id',
            'id',
            'book_id',

        );
    }
}
