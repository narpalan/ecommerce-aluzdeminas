<section class="categories-section py-5">
    @php
     $categories = [
            [
                'name' => 'Velas Aromáticas',
                'image' => 'assets/imgs/categories-1.svg'
            ],
            [
                'name' => 'Luminárias',
                'image' => 'assets/imgs/categories-2.svg'
            ],
            [
                'name' => 'Kits Presente',
                'image' => 'assets/imgs/categories-3.svg'
            ],            
            // Adicione mais categorias conforme necessário
        ];
    @endphp
    <div class="container">
        <!-- Título -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold mb-3" style="color: #333; font-size: 2rem; line-height: 1.3;">
                    Confira nossas categorias para encontrar o produto perfeito para você.
                </h2>
            </div>
        </div>

        <!-- Desktop - Grid -->
        <div class="d-none d-md-block">
            <div class="row justify-content-center g-5">
                @foreach($categories as $category)
                <div class="col-md-4 col-lg-4">
                    <div class="category-card text-center">
                        <div class="category-image mb-4">
                            <img src="{{ asset($category['image']) }}" 
                                 alt="{{ $category['name'] }}" 
                                 class="img-fluid"
                                 loading="lazy">
                        </div>
                        <h5 class="fw-bold text-dark mb-0" style="font-size: 1.25rem;">{{ $category['name'] }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Mobile - Carousel -->
        <div class="d-block d-md-none">
            <div id="categoriesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($categories as $index => $category)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="category-card text-center px-3">
                            <div class="category-image mb-4 mx-auto">
                                <img src="{{ asset($category['image']) }}" 
                                     alt="{{ $category['name'] }}" 
                                     class="img-fluid"
                                     loading="lazy">
                            </div>
                            <h5 class="fw-bold text-dark mb-0" style="font-size: 1.25rem;">{{ $category['name'] }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Controls 
                <button class="carousel-control-prev" type="button" data-bs-target="#categoriesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#categoriesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
                -->
                
                <!-- Indicators -->
                <div class="carousel-indicators-container mt-4">
                    @foreach($categories as $index => $category)
                    <button type="button" 
                            data-bs-target="#categoriesCarousel" 
                            data-bs-slide-to="{{ $index }}" 
                            class="carousel-indicator {{ $index === 0 ? 'active' : '' }}"
                            aria-label="Categoria {{ $index + 1 }} {{ $category['name'] }}">
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Categories Section Styles */
    .categories-section {
        background-color: #fff !important;
    }

    .category-card {
        padding: 2rem 1rem;
        transition: transform 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-8px);
    }

    .category-image {
        width: 20rem;
        height: 20rem;
        margin: 0 auto;    
        border-radius: 50% 50% 0% 0%;    
        transition: all 0.3s ease;
    }

    .category-card:hover .category-image {
        filter: brightness(1.05);
    }

    .category-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50% 50% 0% 0%;
    }

    /* Mobile Carousel Adjustments */
    @media (max-width: 767.98px) {
        .categories-section {
            padding: 3rem 0 !important;
        }
        
        .category-card {
            padding: 1.5rem 0.5rem;
        }
        
        .category-image {
            width: 16.75rem;
            height: 17rem;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            top: 40%;
            transform: translateY(-50%);
            background: rgba(255, 107, 53, 0.9);
            border-radius: 50%;
            opacity: 0.9;
        }
        
        .carousel-control-prev {
            left: 10px;
        }
        
        .carousel-control-next {
            right: 10px;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 1rem;
            width: 1.5rem;
            height: 1.5rem;
        }
    }

    /* Custom Carousel Indicators */
    .carousel-indicators-container {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 2rem;
    }

    .carousel-indicator {
        width: 12px;
        height: 12px;
        border: none;
        border-radius: 50%;
        background-color: #ddd;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .carousel-indicator.active {
        background-color: #FF6B35;
        transform: scale(1.2);
    }

    /* Custom carousel indicator colors */
    .carousel-indicators button.active {
        background-color: #FF6B35 !important;
    }

    /* Ajustes para tablets */
    @media (min-width: 768px) and (max-width: 1023.98px) {
        .category-image {
            width: 20rem;
            height: 22rem;
        }
    }
</style>