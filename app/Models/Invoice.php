<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'cart_id',
        'reference_number',
        'last_name',
        'first_name',
        'country',
        'street_address',
        'city',
        'zip_code',
        'contact_number',
        'email',
        'payment_method',
        'status',
    ];

    /** 
     * Relationships
     * 
     * 
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /** 
     * Renders
     * 
     * 
     */
    public function renderFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function renderFullAddress()
    {
        return $this->street_address . ', ' . $this->city . ', ' . $this->country . ' ' . $this->zip_code;
    }
}
