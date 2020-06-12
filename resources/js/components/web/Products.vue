<template>
    <div>
        <div class="row">
            <div class="col-md-3 d-flex" v-for="product in products" :key="product.id">
                <div class="product">
                    <div class="img d-flex align-items-center justify-content-center" :style="{ backgroundImage: `url(/storage/${product.image_path})` }">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center" @click.prevent="addToCart(product.id)"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a :href="`/products/${product.id}`" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="text text-center">
                        <span class="category">{{ product.category.name }}</span>
                        <h2>{{ product.name }}</h2>
                        <span class="price">${{ product.price }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5" v-if="this.isProductsPage">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li :class="{ disabled: !pagination.previous_page_url }">
                            <a href="#" @click="fetchProducts(pagination.prev_page_url)">&lt;</a>
                        </li>

                        <li v-for="index in pagination.last_page" :key="index">
                            <a href="#" @click.prevent="fetchProducts(`/api/v1/products?page=${index}`)">{{ index }}</a>
                        </li>

                        <li>
                            <a href="#" @click="fetchProducts(pagination.next_page_url)">&gt;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../../EventBus';

    export default {
        mounted() {
            console.log('Component mounted.');
            this.fetchProducts();
        },

        props: {
            isProductsPage: Boolean,
        },

        data() {
            return {
                products: [],
                pagination: {},
            }
        },

        methods: {
            addToCart(id) {
                axios.post(`/api/v1/cart_item/${id}`).then((res) => {
                    EventBus.$emit('update-cart');
                    Swal.fire(
                        'Added to cart!',
                        'This item has been added to your cart.',
                        'success'
                    );
                }).catch((err) => {
                    console.log(err);
                });
            },

            fetchProducts(url) {
                url = url || `/api/v1/products`;

                axios.get(url).then((res) => {
                    this.products = res.data.products.data;
                    this.makePagination(res.data.products);

                }).catch((err) => {
                    console.log(err);
                });
            },

            makePagination(products) {
				let pagination = {
					'current_page': products.current_page,
					'last_page': products.last_page,
					'prev_page_url': products.prev_page_url,
					'next_page_url': products.next_page_url,
				};

				this.pagination = pagination;
			},
        },
    }
</script>
