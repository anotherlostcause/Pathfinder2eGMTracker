<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemAdventure;

class ItemAdventureController extends Controller
{
    public function index() {
        return ItemAdventure::with(['item', 'adventure_path', 'adventure', 'chapter'])->get()->toJson();
    }
}
