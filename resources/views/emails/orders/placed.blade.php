@component('mail::message')
# Introduction

The body of your message.

| Product Name                   | Unit Price                      | Quantity                  | SubTotal               |
|:------------------------------:|:-------------------------------:|:-------------------------:|:----------------------:|
@foreach($invoice->cart->cartItems as $cartItem)
| {{ $cartItem->product->name }} | {{ $cartItem->product->price }} | {{ $cartItem->quantity }} | {{ $cartItem->total }} |
@endforeach
|              |            | Delivery Fee    |   {{ $invoice->cart->delivery_fee }}       |
|              |            | Discount ({{ $invoice->cart->discount_percentage }} %)    |   {{ $invoice->cart->getDiscountAmount() }}       |
|              |            | **Total**    |   {{ $invoice->cart->total }}       |

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
