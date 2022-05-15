<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemAdventure extends Model
{
    use HasFactory;
    use SoftDeletes;

    /* Relationships */
    public function item(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Item::class, 'id', 'item_id')->with(['links', 'traits']);
    }

    public function adventure_path(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(AdventurePath::class, 'id', 'adventure_path_id');
    }

    public function adventure(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Adventure::class, 'id', 'adventure_id');
    }

    public function chapter(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Chapter::class, 'id', 'chapter_id');
    }
}
