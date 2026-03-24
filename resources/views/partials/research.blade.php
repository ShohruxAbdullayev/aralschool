@php
    $locale = app()->getLocale();
    $researchTitle = $settings['research_title'] ?? 'Core research<br>themes';
    $researchIntro = $settings['research_intro'] ?? '';
@endphp

<section class="research-section">
    <div class="research-inner">
        <div class="grid-line-v r-v2"></div>

        <div class="research-header">
            <div class="grid-line-h r-h-mid"></div>
            <div class="research-title-block">
                <h2 class="research-title">{!! $researchTitle !!}</h2>
            </div>
            <div class="research-intro-block">
                <div class="research-intro-wrap">
                    <p class="research-intro">{{ $researchIntro }}</p>
                </div>
            </div>
        </div>

        <div class="research-cards">
            @foreach ($researchThemes as $theme)
                <div class="research-card">
                    <div class="research-card-content">
                        <div class="research-card-image-wrap">
                            <div class="research-card-num">{{ $theme->number }}</div>
                            <img src="{{ asset($theme->image) }}" alt="{{ $theme->getTranslation('title', $locale) }}"
                                class="research-card-img">
                        </div>
                        <div class="research-card-label">
                            <span>{!! nl2br(e($theme->getTranslation('title', $locale))) !!}</span>
                        </div>
                    </div>
                    <div class="research-card-body">
                        <p>{{ $theme->getTranslation('description', $locale) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
