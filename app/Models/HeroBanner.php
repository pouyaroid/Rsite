<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model
{
    protected $table = 'hero_banner';  //

        use HasFactory;
    
        protected $fillable = [
            'title',
            'description',
            'button_text',
            'button_url',
            'image',
        ];
    
}
