<template>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5">
    				<a href="images/prod-1.jpg" class="image-popup prod-img-bg"><img :src="`/storage/${this.product.image_path}`" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                
    			<div class="col-lg-6 product-details pl-md-5">
					<h3>{{ this.product.name }}</h3>
					
    				<div class="rating d-flex">
							<!-- <p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
							</p>
                
                            <p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p> -->
                
                            <p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">{{ this.product.sold }} <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>${{ this.product.price }}</span></p>

                    <p>{{ this.product.description }}</p>                

                    <div class="row mt-4">
                        <div class="input-group col-md-6 d-flex mb-3">
                            <!-- <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="" @click="subtractQuantity()">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </span> -->

                            <input type="number" id="quantity" name="quantity" class="quantity form-control input-number" v-model="quantity" min="1" :max="this.product.stock">
                                
                            <!-- <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" @click="addQuantity()">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span> -->
                        </div>
                  
                        <div class="w-100"></div>
            
                        <div class="col-md-12">
                            <p style="color: #000;">{{ this.product.stock }} piece/s available</p>
                        </div>
          	        </div>
              
                    <p>
                        <a class="btn btn-primary py-3 px-5 mr-2" @click.prevent="addToCart(product.id)">Add to Cart</a>
                        <a href="cart.html" class="btn btn-primary py-3 px-5">Buy now</a>
                    </p>
    			</div>
    		</div>
    	</div>
    </section>
</template>

<script>
    import EventBus from '../../EventBus';

    export default {
        mounted() {
            //
        },

        props: {
            product: Object,
        },

        data() {
            return {
                quantity: 1,
            }
        },

        methods: {
            
            addToCart(id) {
                let quantity = Number.parseInt(document.querySelector('#quantity').value);

                console.log(quantity);
    
                axios.post('/api/v1/cart_item/' + id, {
                    quantity: quantity,
                }).then((res) => {
                    EventBus.$emit('update-cart');
                    Swal.fire(
                        'Added to cart!',
                        'This item has been added to your cart.',
                        'success'
                    );
                    this.quantity = 1;
                }).catch((err) => {
                    console.log(err);
                });
            },

            addQuantity() {
                if (this.quantity >= this.product.stock) {
                    //
                } else {
                    this.quantity++;
                }
            },

            subtractQuantity() {
                if (this.quantity <= 0) {
                    this.quantity = 0;
                } else {
                    this.quantity--;
                }
            }
        }
    }
</script>
