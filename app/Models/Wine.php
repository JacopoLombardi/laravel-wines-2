<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;
    public function Aromas(){
        return $this->belongsToMany(Aroma::class);

    }

    protected $fillable = [
        'wine',
        'winery',
        'slug',
        'rating_average',
        'rating_reviews',
        'location',
        'image'
    ];
}
