@php
    $locale = app()->getLocale();
    $aboutTitle = $settings['about_title'] ?? 'About ACDF';
    $aboutLeft = $settings['about_left'] ?? 'The Aral School is an initiative of the Uzbekistan Art and Culture Development Foundation (ACDF).';
    $aboutRight = $settings['about_right'] ?? '';
@endphp

<section class="about-section" id="about-acdf">
    <div class="grid-overlay-dark">
        <div class="grid-col border-right-dark"></div>
        <div class="grid-col border-right-dark"></div>
        <div class="grid-col border-right-dark"></div>
        <div class="grid-col"></div>
    </div>

    <div class="about-inner">
        <div class="about-grid-wrapper">
            <div class="about-img-layer">
                <img src="{{ asset('img/about.png') }}" class="about-bg-img" alt="About ACDF Dome">
            </div>

            <div class="about-content-layer">
                <div class="about-title-row">
                    <div class="about-title-box">
                        <div class="about-node-black"></div>
                        <h2>{{ $aboutTitle }}</h2>
                    </div>
                </div>

                <div class="about-text-row">
                    <div class="about-text-left-wrapper">
                        <div class="about-text-left">
                            <p>{{ $aboutLeft }}</p>
                        </div>
                    </div>
                    <div class="about-text-right-wrapper">
                        <div class="about-text-right">
                            {!! $aboutRight !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
