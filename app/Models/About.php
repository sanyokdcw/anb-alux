<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class About extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['description_top','description_bottom','title'];
}
