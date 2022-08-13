<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['sub', 'title', 'slug', 'image'];
    public $timestamps = false;

    public function subs()
    {
        return $this->hasMany(self::class, 'sub');
    }

    public function pai()
    {
        return $this->belongsTo(self::class, 'sub');
    }

    public function images()
    {
        return $this->hasMany(Gallery::class, 'category_id');
    }

    public function image()
    {
        return $this->images()->first();
    }
}
