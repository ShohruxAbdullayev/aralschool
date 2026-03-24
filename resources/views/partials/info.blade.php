@php
    $locale = app()->getLocale();
@endphp

<section class="info-section">
    <div class="info-inner">
        <div class="info-image-box">
            <img src="{{ asset('img/intro.png') }}" alt="Aral Sea Satellite Image" class="info-image">
        </div>

        <div class="info-right">
            @foreach ($infoParagraphs as $paragraph)
                <p>{{ $paragraph->getTranslation('content', $locale) }}</p>
            @endforeach
        </div>
    </div>
</section>
