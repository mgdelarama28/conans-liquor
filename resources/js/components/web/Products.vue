<template>
    <div>
        <div class="row mb-4">
            <div class="col-md-12 d-flex justify-content-end align-items-center">
                <h4 class="product-select mr-3">Filter By Category:</h4>
                
                <select class="selectpicker" @change="fetchProducts(`/api/v1/products/${$event.target.value}`)">
                    <option value="">All Products</option>
                    <option v-for="category in this.categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 d-flex" v-for="product in products" :key="product.id">
                <div class="product">
                    <div class="img d-flex align-items-center justify-content-center" :style="{ backgroundImage: `url(https://conans-liquor.s3.ap-southeast-1.amazonaws.com/${product.image_path})` }">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center" @click.prevent="addToCart(product.id)"><span class="flaticon-shopping-bag"></span></a>
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
            categories: Array,
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
                    this.products = res.data.products;
                }).catch((err) => {
                    console.log(err);
                });
            },
        },
    }
</script>
