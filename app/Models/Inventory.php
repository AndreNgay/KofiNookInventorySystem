<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Unit;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'image',
        'description',
        'stock',
        'required_stock',
        'unit',
        'cost',
        'category',
        'type',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    
}
