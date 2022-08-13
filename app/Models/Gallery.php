<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable = ['row', 'category_id', 'per', 'width', 'height', 'image'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
