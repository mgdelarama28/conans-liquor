<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image_path',
    ];

    /** 
     * Relationships
     * 
     * 
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /** 
     * Renders
     * 
     * 
     */
    public function renderImage()
    {
        return Storage::disk('s3')->url($this->image_path);
    }
}
