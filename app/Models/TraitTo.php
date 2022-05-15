<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TraitTo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'trait_to';
}
