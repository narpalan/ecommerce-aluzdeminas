<section class="hero-section w-100">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores (bolinhas) -->
        <div class="carousel-indicators">
            @foreach([1, 2, 3] as $index)
            <button type="button" 
                    data-bs-target="#heroCarousel" 
                    data-bs-slide-to="{{ $index - 1 }}" 
                    class="{{ $index === 1 ? 'active' : '' }}" 
                    aria-label="Slide {{ $index }}"
                    aria-current="{{ $index === 1 ? 'true' : 'false' }}">
            </button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach([1, 2, 3] as $index)
            <div class="carousel-item {{ $index === 1 ? 'active' : '' }}">
                <picture>
                    <!-- Mobile -->
                    <source srcset="{{ asset('assets/imgs/carousel-hero-' . $index . '.svg') }}" media="(max-width: 767.98px)">
                    
                    <!-- Desktop e Tablet -->
                    <source srcset="{{ asset('assets/imgs/carousel-banner-' . $index . '.svg') }}" media="(min-width: 768px)">

                    <!-- Fallback com loading otimizado -->
                    <img src="{{ asset('assets/imgs/carousel-banner-' . $index . '.svg') }}" 
                         class="w-100 d-block" 
                         alt="Hero Banner {{ $index }} - A Luz de Minas Velas e Luminárias"
                         loading="{{ $index === 1 ? 'eager' : 'lazy' }}"
                         decoding="{{ $index === 1 ? 'sync' : 'async' }}">
                </picture>
            </div>
            @endforeach
        </div>
    </div>
</section>