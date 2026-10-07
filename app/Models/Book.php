<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Book extends Model
    {
    use HasFactory;

    protected $fillable = [
        'tittle',
        'publication_year',
        'category_id',
        'description'
    ];

    /**
     * Un libro pertenece a una categoria
     */
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
/**
 * relacion mucho a muchos con autores
 */
    public function Author()
     {
    return $this->belongsToMany(Author::class, 'authorbook', 'book_id', 'author_id');
     }
    }