@php
    $locale = app()->getLocale();
    $applyTitle = $settings['apply_title'] ?? 'Who can apply';
    $applyIntro = [
        $settings['apply_intro_p1'] ?? 'The multidisciplinary programme is aimed at young professionals from Uzbekistan and abroad with varied backgrounds and work experience in the fields of architecture, urbanism, environmental science, biotech, climate studies, filmmaking, media, crafts, design, computer technologies, social studies, physical sciences, and other fields.',
        $settings['apply_intro_p2'] ?? 'It is recommended that applicants to the programme have a higher education diploma (in any specialisation) and no less than 2-3 years of work experience.',
        $settings['apply_intro_p3'] ?? 'When reviewing applications, we focus on how potential researchers could apply their expertise to the research agenda of the programme and current theme.',
    ];
    $applyActionLabel = $settings['apply_action_label'] ?? 'Apply now';
    $applyActionDeadline = $settings['apply_action_deadline'] ?? 'Deadline 5th of October 2026';
@endphp

<section class="apply-section" id="apply">
    <div class="apply-inner">
        <div class="grid-line-v r-v1"></div>
        <div class="grid-line-v r-v2"></div>
        <div class="grid-line-v r-v3"></div>

        <div class="apply-header">
            <h2 class="apply-title">{{ $applyTitle }}</h2>
        </div>

        <div class="apply-intro">
            <div class="apply-image-wrap">
                <img src="{{ asset('img/apply.png') }}" alt="Who can apply" class="apply-img">
            </div>

            <div class="apply-desc-wrap">
                @foreach ($applyIntro as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>

        <div class="apply-action-bar">
            <div class="apply-button">
                <div class="apply-btn-text">
                    <span>{{ $applyActionLabel }}</span><br>
                    <span class="apply-deadline">{{ $applyActionDeadline }}</span>
                </div>
                <div class="apply-btn-icon"></div>
            </div>
        </div>

        <div class="apply-steps-container">
            @foreach ($applySteps as $step)
                @php
                    $stepClass = $step->type === 'right' ? 'step-right' : 'step-left';
                    $contentClass = $step->sort_order === 4 ? 'apply-step-content block-spacing' : 'apply-step-content';
                @endphp
                <div class="apply-step-row {{ $stepClass }}">
                    <div class="gfx-conn {{ $stepClass === 'step-right' ? 'to-right' : 'to-left' }}">
                        <div class="gc-node"></div>
                        <svg preserveAspectRatio="none" viewBox="0 0 100 100">
                            <line x1="{{ $stepClass === 'step-right' ? '0' : '100' }}" y1="0"
                                x2="{{ $stepClass === 'step-right' ? '100' : '0' }}" y2="100"
                                stroke="rgba(0,0,0,0.5)" stroke-width="1"
                                vector-effect="non-scaling-stroke" />
                        </svg>
                    </div>
                    <div class="apply-step-box">
                        <div class="apply-step-num">{{ $step->sort_order }}</div>
                        <div class="{{ $contentClass }}">
                            <h3>{{ $step->getTranslation('title', $locale) }}</h3>
                            {!! $step->getTranslation('content', $locale) !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
