<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('web.index') }}">Conan's <span>Liquor</span></a>
        
        <cart-icon></cart-icon>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('web.index') ? 'active' : '' }}">
                    <a href="{{ route('web.index') }}" class="nav-link">Home</a>
                </li>
                
                <li class="nav-item">
                    <a href="about.html" class="nav-link">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{ route('web.products.index') }}">Products</a>
                        <a class="dropdown-item" href="{{ route('web.cart.index') }}">Cart</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="blog.html" class="nav-link">Blog</a>
                </li>
                
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->