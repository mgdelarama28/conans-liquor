<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'stock',
        'sold',
        'image_path',
    ];

    /** 
     * Relationships
     * 
     * 
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cartItem()
    {
        return $this->hasOne(CartItem::class);
    }

    /** 
     * Renders
     * 
     * 
     */
    public function renderDescription()
    {
        if ($this->description):
            return $this->description;
        endif;

        return 'No description to show.';
    }

    public function renderImage()
    {
        return Storage::disk('s3')->url($this->image_path);
    }
}
