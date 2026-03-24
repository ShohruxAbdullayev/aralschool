@php
    $locale = app()->getLocale();
    $introTitle = $intro?->getTranslation('title', $locale) ?? 'Aral School';
    $introDescription = $intro?->getTranslation('description', $locale)
        ?? "We are pleased to announce the Aral School, the new education programme beginning in 2026, led by Jan Boelen and commissioned by the Uzbekistan Art and Culture Development Foundation.";
    $applyLabel = $settings['intro_apply_label'] ?? 'Apply now';
    $applyDeadline = $settings['intro_deadline'] ?? 'Deadline 5th of October 2025';
@endphp

<section class="intro-section" id="about">
    <div class="intro-inner">
        <div class="grid-line-v v1"></div>
        <div class="grid-line-v v3"></div>
        <div class="grid-line-h h-intro-bot"></div>

        <div class="intro-diag-left">
            <svg width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100">
                <line x1="0" y1="100" x2="100" y2="40" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                    vector-effect="non-scaling-stroke"></line>
            </svg>
        </div>

        <div class="intro-black-square"></div>

        <div class="intro-text">
            <h3>{{ $introTitle }}</h3>
            <p>{{ $introDescription }}</p>
        </div>

        <div class="intro-diag-right">
            <svg width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100">
                <line x1="0" y1="0" x2="60" y2="60" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                    vector-effect="non-scaling-stroke"></line>
            </svg>
            <div class="intro-red-square"></div>
        </div>

        <div class="intro-red-banner">
            <div class="banner-content">
                <div class="banner-texts">
                    <span class="apply-text">{{ $applyLabel }}</span>
                    <span class="deadline-text">{{ $applyDeadline }}</span>
                </div>
                <div class="banner-line"></div>
                <div class="banner-square"></div>
            </div>
        </div>
    </div>
</section>
