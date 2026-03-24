@php
    $locale = app()->getLocale();
    $mentorsTitle = $settings['mentors_title'] ?? 'Mentors & Experts';
    $waterLabel = $settings['mentors_category_water'] ?? 'Water';
    $foodLabel = $settings['mentors_category_food'] ?? 'Food';
    $waterMentors = $mentorsByCategory->get('water', collect());
    $foodMentors = $mentorsByCategory->get('food', collect());
    $rows = max($waterMentors->count(), $foodMentors->count());
@endphp

<section class="mentors-section">
    <div class="mentors-inner">
        <div class="mentors-header-row">
            <div class="mentors-col title-col border-right">
                <h2 class="mentors-title">{{ $mentorsTitle }}</h2>
            </div>
            <div class="mentors-col graphic-col border-right">
                <div class="mentors-node-square"></div>
                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="mentors-diag">
                    <line x1="0" y1="0" x2="100" y2="100" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                        vector-effect="non-scaling-stroke" />
                </svg>
            </div>
            <div class="mentors-col empty-col"></div>
        </div>

        <div class="mentors-cats-row border-bottom">
            <div class="mentors-col category-col border-right">
                <h3>{{ $waterLabel }}</h3>
            </div>
            <div class="mentors-col category-col">
                <h3>{{ $foodLabel }}</h3>
            </div>
        </div>

        @for ($i = 0; $i < $rows; $i++)
            @php
                $water = $waterMentors->get($i);
                $food = $foodMentors->get($i);
            @endphp
            <div class="mentors-grid-row border-bottom">
                <div class="mentors-col border-right">
                    @if ($water)
                        <div class="profile-card member-card">
                            <div class="profile-img-box">
                                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="profile-diag">
                                    <line x1="0" y1="100" x2="100" y2="0" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                                <img src="{{ asset($water->image) }}"
                                    alt="{{ $water->getTranslation('name', $locale) }}">
                            </div>
                            <h3>{!! nl2br(e($water->getTranslation('name', $locale))) !!}</h3>
                        </div>
                    @endif
                </div>
                <div class="mentors-col bio-text border-right">
                    @if ($water)
                        {!! $water->getTranslation('bio', $locale) !!}
                    @endif
                </div>

                <div class="mentors-col border-right">
                    @if ($food)
                        <div class="profile-card member-card">
                            <div class="profile-img-box">
                                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="profile-diag">
                                    <line x1="0" y1="100" x2="100" y2="0" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                                <img src="{{ asset($food->image) }}"
                                    alt="{{ $food->getTranslation('name', $locale) }}">
                            </div>
                            <h3>{!! nl2br(e($food->getTranslation('name', $locale))) !!}</h3>
                        </div>
                    @endif
                </div>
                <div class="mentors-col bio-text">
                    @if ($food)
                        {!! $food->getTranslation('bio', $locale) !!}
                    @endif
                </div>
            </div>
        @endfor
    </div>
</section>
