@php
    $locale = app()->getLocale();
    $outcomesTitle = $settings['outcomes_title'] ?? 'Programme<br>outcomes';
@endphp

<section class="outcomes-section">
    <div class="outcomes-inner">
        <div class="grid-line-v r-v1"></div>
        <div class="grid-line-v r-v2"></div>
        <div class="grid-line-v r-v3"></div>

        <div class="outcomes-graphics">
            <div class="oc-line-1"><svg preserveAspectRatio="none" viewBox="0 0 100 100">
                    <line x1="100" y1="0" x2="0" y2="100" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                        vector-effect="non-scaling-stroke" />
                </svg></div>
            <div class="oc-line-2"><svg preserveAspectRatio="none" viewBox="0 0 100 100">
                    <line x1="100" y1="0" x2="0" y2="100" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                        vector-effect="non-scaling-stroke" />
                </svg></div>
            <div class="oc-line-3"><svg preserveAspectRatio="none" viewBox="0 0 100 100">
                    <line x1="0" y1="0" x2="100" y2="100" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                        vector-effect="non-scaling-stroke" />
                </svg></div>

            <div class="oc-square oc-sq-1"></div>
            <div class="oc-square oc-sq-2"></div>
            <div class="oc-square oc-sq-3"></div>
        </div>

        <div class="outcomes-header-row">
            <div class="outcomes-header-left"></div>
            <div class="outcomes-header-right">
                <h2 class="outcomes-title">{!! $outcomesTitle !!}</h2>
            </div>
        </div>

        <div class="outcomes-content-row">
            @foreach ($outcomes as $outcome)
                <div class="outcomes-col">
                    <div class="outcomes-card">
                        <p>{{ $outcome->getTranslation('content', $locale) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
