<template>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
                <div class="col-xl-10">
                    <form action="#" class="billing-form">
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" placeholder="" name="first_name" v-model="invoice.first_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="" name="last_name" v-model="invoice.last_name">
                                    </div>
                                </div>
                    
                                <div class="w-100"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">State / Country</label>
                                    <div class="select-wrap">

                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="country" id="" class="form-control" v-model="invoice.country">
                                            <option value="France">France</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Hongkong">Hongkong</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetaddress">Street Address</label>
                                    <input type="text" class="form-control" placeholder="House number and street name" name="street_address" v-model="invoice.street_address">
                                </div>
                            </div>
                            
                            <div class="w-100"></div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Town / City</label>
                                    <input type="text" class="form-control" placeholder="" name="city" v-model="invoice.city">
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Postcode / ZIP *</label>
                                    <input type="text" class="form-control" placeholder="" name="zip_code" v-model="invoice.zip_code">
                                </div>
                            </div>
                                
                            <div class="w-100"></div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" class="form-control" placeholder="" name="contact_number" v-model="invoice.contact_number">
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="text" class="form-control" placeholder="" name="email" v-model="invoice.email">
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <!-- <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
                                        <label><input type="radio" name="optradio"> Ship to different address</label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
	                </form><!-- END -->

                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>${{ cart.subtotal }}</span>
                                </p>

                                <p class="d-flex">
                                    <span>Delivery Fee</span>
                                    <span>$ 0.00</span>
                                </p>
                                        
                                <p class="d-flex">
                                    <span>Discount (0%)</span>
                                    <span>$ 0.00</span>
                                </p>

                                <hr>

                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>${{ cart.total }}</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Payment Method</h3>
                                
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="payment_method" v-model="invoice.payment_method" class="mr-2" value="Cash on Delivery">Cash on Delivery</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" class="mr-2" @click="toggleTermsAgreed()">I have read and accept the terms and conditions
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <p>
                                    <button class="btn btn-primary py-3 px-4" @click.prevent="checkout()" :disabled="!termsAgreed">Place an order</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
    	</div>
    </section>
</template>

<script>
    import EventBus from '../../EventBus';

    export default {
        mounted() {
            this.fetchCart();
        },

        data() {
            return {
                cart: {
                    id: '',
                },
                invoice: {
                    // cart_id: this.cart.id,
                    last_name: '',
                    first_name: '',
                    country: '',
                    street_address: '',
                    city: '',
                    zip_code: '',
                    contact_number: '',
                    email: '',
                    payment_method: 'Cash on Delivery',
                },
                termsAgreed: false,
            }
        },

        methods: {
            fetchCart() {
                axios.get('/api/v1/cart').then((res) => {
                    this.cart = res.data.cart;
                }).catch((err) => {
                    console.log(err);
                });
            },

            checkout() {
                Swal.fire({
                    title: 'Check out?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!'
                }).then((result) => {
                    if (result.value) {
                        axios.post(`/invoice`, this.invoice).then((res) => {
                            EventBus.$emit('update-cart');
                            this.fetchCart();
                        }).catch((err) => {
                            console.log(err);
                        });

                        Swal.fire(
                            'Your order has been placed!',
                            'Check your email for more details on your order.',
                            'success'
                        ).then(() => {
                            window.location.href = '/';
                        });
                    }
                });
            },

            toggleTermsAgreed(x) {
                this.termsAgreed = !this.termsAgreed;
            }
        },
    }
</script>
