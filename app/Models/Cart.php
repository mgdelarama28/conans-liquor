<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'session_id',
        'status',
        'subtotal',
        'delivery_fee',
        'discount',
        'total',
    ];

    /** 
     * Relationships
     * 
     * 
     */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Getters
     * 
     * 
     */
    public function getSubtotal()
    {
        return $subtotal = $this->cartItems->sum('total');
    }

    public function getTotal()
    {
        $total = $this->getDiscountedPrice() + $this->delivery_fee;
        return $total;
    }

    public function getDiscountedPrice()
    {
        return $this->getSubtotal() - $this->getDiscountAmount();
    }

    public function getDiscountAmount()
    {
        return $this->getSubtotal() * ($this->discount_percentage / 100);
    }

    /**
     * Find the session cart
     * 
     * @return mixed $cart
     */
    public function getSessionCart()
    {
        return $this->with('cartItems.product')->where([
            'session_id' => session()->getId(),
            'status' => 1,
        ])
        ->latest()
        ->first();
    }

    /**
     * Find or create a session cart
     * 
     * @return mixed $cart
     */
    public function getOrCreateSessionCart()
    {
        $session =  session()->getId();

        return $this->getSessionCart() ? $this->getSessionCart() : $this->create(['session_id' => $session]);
    }
}
