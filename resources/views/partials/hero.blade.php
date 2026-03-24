@php
    $locale = app()->getLocale();
    $heroText = $hero
        ? $hero->getTranslation('text', $locale)
        : '<span class="bold-text">The Aral Sea</span> is a place where all the most urgent concerns of today come together. Soil, water, energy, food, textiles and air quality – it can be seen as the live laboratory of the future and can help us rethink what\'s possible for many generations to come.';
    $heroImage = $hero?->image ?: 'img/hero-bg.png';
@endphp

<section class="hero-section">
    <div class="hero-inner">
        <div class="grid-line-v v1"></div>
        <div class="grid-line-v v2"></div>
        <div class="grid-line-v v3"></div>
        <div class="grid-line-h h-top"></div>
        <div class="grid-line-h h-mid"></div>

        <div class="hero-image-box">
            <img src="{{ asset($heroImage) }}" alt="Traditional work" class="hero-image">
        </div>

        <div class="black-square"></div>

        <div class="hero-right">
            <p class="hero-text">{!! $heroText !!}</p>
        </div>
    </div>
</section>
