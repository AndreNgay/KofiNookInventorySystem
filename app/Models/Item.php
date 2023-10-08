<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Unit;
use App\Models\Type;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'category_id',
        'type_id',
        'item_name',
        'image',
        'description',
        'cost',
        'stock',
        'stock_used_per_day',
        'created_at',
        'created_by',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
    public $timestamps = false;
}
