<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'thumbnail_url',
        'author',
        'synopsis',
        'borrowed_by',
        'tgl_pinjam',
        'tgl_kembali',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
