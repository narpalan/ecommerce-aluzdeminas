<section class="hero-section w-100">    
    @php
        $slides = [
            [
                'title' => 'Luz de Minas,',
                'subtitle' => 'Iluminando momentos Inspirando pessoas!'
            ],
            [
                'title' => 'Candles are awesome',
                'subtitle' => 'SOME SECOND LINE TEXT'
            ],
            [
                'title' => 'Make your home feel cozy!',
                'subtitle' => 'Buy a candle TODAY!'
            ],
        ];
    @endphp
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach($slides as $index => $slide)
            <button type="button" 
                    data-bs-target="#heroCarousel" 
                    data-bs-slide-to="{{ $index }}" 
                    class="{{ $index === 0 ? 'active' : '' }}" 
                    aria-label="Slide {{ $index }}"
                    aria-current="{{ $index === 0 ? 'true' : 'false' }}">
            </button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach($slides as $index => $slide)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <picture>
                    <!-- Mobile -->
                    <source srcset="{{ asset('assets/imgs/carousel-hero-' . ($index) . '.svg') }}" media="(max-width: 767.98px)">
                    
                    <!-- Desktop n Tablet -->
                    <source srcset="{{ asset('assets/imgs/carousel-banner-' . ($index) . '.svg') }}" media="(min-width: 768px)">

                    <!-- Fallback n optimized loading -->
                    <img src="{{ asset('assets/imgs/carousel-banner-' . ($index) . '.svg') }}" 
                         class="w-100 d-block" 
                         alt="Hero Banner {{ $index }} - A Luz de Minas Velas e Luminárias"
                         loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                         decoding="{{ $index === 0 ? 'sync' : 'async' }}">
                </picture>
                
                <!-- Slide Caption -->
                <div class="carousel-caption-responsive">
                    <div class="caption-content">
                        <p class="m-0 px-3 py-2 caption-text">
                            <span class="text-white caption-title my-2">{{ $slide['title'] }}<br/></span>
                            <span class="text-white caption-subtitle">{{ $slide['subtitle'] }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>