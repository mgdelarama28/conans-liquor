@component('mail::message')
# Introduction

The body of your message.

| Product Name                   | Unit Price                      | Quantity                  | SubTotal               |
|:-------------------------------|:-------------------------------:|:-------------------------:|:----------------------:|
@foreach($invoice->cart->cartItems as $cartItem)
| {{ $cartItem->product->name }} | {{ $cartItem->product->price }} | {{ $cartItem->quantity }} | {{ $cartItem->total }} |
@endforeach
|                                |                                 | Delivery Fee              |   $ 0.00               |
|                                |                                 | Discount (0%)             |   $ 0.00               |
|                                |                                 | **Total**                 |   {{ $invoice->cart->total }} |

@component('mail::button', ['url' => '/'])
Back to Conan's Liquor
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
