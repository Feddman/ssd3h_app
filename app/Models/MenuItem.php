<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';
    protected $guarded = [];
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }
}