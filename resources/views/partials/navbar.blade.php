<header class="container">
    <div class="row align-items-center nav-body">
        <!-- Hamburguer Menu (Mobile) -->
        <div class="col-3 d-block d-md-none">
            <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Abrir menu">
                <img src="{{ asset('assets/imgs/burguer-menu.svg') }}" alt="Menu" width="24" height="24">
            </button>
        </div>

        <!-- Logo (Mobile - Centralizado / Desktop - Esquerda) -->
        <div class="col-6 col-md-2 d-flex justify-content-center justify-content-md-start align-items-center" id="logo">
            <a class="navbar-brand" href="/" aria-label="A Luz de Minas - Página inicial">
                <img src="{{ asset('assets/imgs/logo-navbar.svg') }}" alt="A Luz de Minas - Velas e Luminárias" class="navbar-logo">
            </a>
        </div>

        <!-- Nav Links (Desktop) -->
        <div class="col-md-8 d-none d-md-flex justify-content-center">
            <nav class="navbar-nav d-flex flex-row gap-4" role="navigation" aria-label="Navegação principal">
                <a class="nav-link fw-bold" href="/">HOME</a>
                <a class="nav-link fw-bold" href="#sobre">SOBRE</a>
                <a class="nav-link fw-bold" href="#fragrancias">FRAGRÂNCIAS</a>
                <a class="nav-link fw-bold" href="#produtos">PRODUTOS</a>
                <a class="nav-link fw-bold" href="#kits-presentes">KITS E PRESENTES</a>
            </nav>
        </div>
        
        <!-- Bag and Login -->
        <div class="col-3 col-md-2 d-flex justify-content-end align-items-center gap-3">            
            <a href="/carrinho" class="cart-icon position-relative" aria-label="Carrinho de compras">                
                <img src="{{ asset('assets/imgs/bag-default.svg') }}" alt="Carrinho" width="24" height="24">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
            </a>
            
            <button class="btn btn-primary d-none d-md-block ms-2" style="background-color: #FF6B35; border-color: #FF6B35;">                
                <img src="{{ asset('assets/imgs/action-button.svg') }}" alt="Ação" width="20" height="20">
            </button>
        </div>
    </div>
</header>

<!-- Offcanvas Mobile Menu -->
<div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="navbar-nav">
            <a class="nav-link py-2" href="/home">HOME</a>
            <a class="nav-link py-2" href="/#sobre">SOBRE</a>
            <a class="nav-link py-2" href="/#fragrancias">FRAGRÂNCIAS</a>
            <a class="nav-link py-2" href="/#produtos">PRODUTOS</a>
            <a class="nav-link py-2" href="/#kits-presentes">KITS E PRESENTES</a>            
          
            <div class="mt-3">
                <button class="btn btn-primary w-100" style="background-color: #FF6B35; border-color: #FF6B35;">                    
                    Ação
                </button>
            </div>
        </nav>
    </div>
</div>