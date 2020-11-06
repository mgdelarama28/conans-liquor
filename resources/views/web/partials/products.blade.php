<section class="ftco-section" id="products">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center">
                <h2>Our Products</h2>
            </div>
        </div>
            
        <products
            :products="{{ $products }}"
            :categories="{{ $categories }}"
        ></products>
    </div>
</section>