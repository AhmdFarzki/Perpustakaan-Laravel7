<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_code', 'barcode', 'name', 'image', 'author', 'publisher', 'publication_year', 'isbn', 'stock'
    ];

    // One book have many borrowing
    public function borrowing() {
        return $this->hasMany(Borrowing::class);
    }
}
