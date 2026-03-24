@php
    $locale = app()->getLocale();
    $teamTitle = $settings['team_title'] ?? 'The team';
    $leader = $teamLeaders->first();
    $directors = $teamLeaders->slice(1, 2);

    $leaderLeft = [];
    $leaderRight = [];
    if ($leader) {
        $leaderBio = $leader->getTranslation('bio', $locale);
        if (str_contains($leaderBio, '<p')) {
            preg_match_all('/<p\\b[^>]*>.*?<\\/p>/s', $leaderBio, $matches);
            $paragraphs = $matches[0] ?? [];
        } else {
            $paragraphs = ['<p>' . e($leaderBio) . '</p>'];
        }
        $splitIndex = (int) ceil(count($paragraphs) / 2);
        $leaderLeft = array_slice($paragraphs, 0, $splitIndex);
        $leaderRight = array_slice($paragraphs, $splitIndex);
    }
@endphp

<section class="team-section" id="team">
    <div class="team-inner">
        <div class="team-header-row">
            <div class="team-col empty-col border-right"></div>
            <div class="team-col graphic-col border-right">
                <div class="team-node-square"></div>
                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="team-diag">
                    <line x1="0" y1="0" x2="100" y2="100" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                        vector-effect="non-scaling-stroke" />
                </svg>
            </div>
            <div class="team-col title-col">
                <h2 class="team-title">{{ $teamTitle }}</h2>
            </div>
        </div>

        @if ($leader)
            <div class="team-row leader-row border-bottom">
                <div class="team-col empty-col border-right">
                    <div class="team-node-square" style="top: auto; bottom: -10px; right: -10.5px;"></div>
                    <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="team-diag">
                        <line x1="100" y1="100" x2="0" y2="0" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                            vector-effect="non-scaling-stroke" />
                    </svg>
                </div>
                <div class="team-col profile-col border-right">
                    <div class="profile-card">
                        <div class="profile-img-box">
                            <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="profile-diag">
                                <line x1="0" y1="100" x2="100" y2="0" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                                    vector-effect="non-scaling-stroke" />
                            </svg>
                            <img src="{{ asset($leader->image) }}" alt="{{ $leader->getTranslation('name', $locale) }}">
                        </div>
                        <h3>{{ $leader->getTranslation('name', $locale) }}</h3>
                        <p class="role">{{ $leader->getTranslation('role', $locale) }}</p>
                    </div>
                </div>
                <div class="team-col bio-col-half">
                    {!! implode('', $leaderLeft) !!}
                </div>
                <div class="team-col bio-col-half border-left">
                    {!! implode('', $leaderRight) !!}
                </div>
            </div>
        @endif

        @if ($directors->count())
            <div class="team-row dir-row border-bottom">
                @foreach ($directors as $index => $director)
                    <div class="team-col profile-col border-right">
                        <div class="profile-card">
                            <div class="profile-img-box">
                                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="profile-diag">
                                    <line x1="0" y1="100" x2="100" y2="0" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                                <img src="{{ asset($director->image) }}"
                                    alt="{{ $director->getTranslation('name', $locale) }}">
                            </div>
                            <h3>{!! nl2br(e($director->getTranslation('name', $locale))) !!}</h3>
                            <p class="role">{{ $director->getTranslation('role', $locale) }}</p>
                        </div>
                    </div>
                    <div class="team-col bio-col-full {{ $index === 0 ? 'border-right' : '' }}">
                        {!! $director->getTranslation('bio', $locale) !!}
                    </div>
                @endforeach
            </div>
        @endif

        @foreach ($teamMembers->chunk(4) as $chunk)
            <div class="team-row team-grid border-bottom">
                @foreach ($chunk as $index => $member)
                    @php
                        $borderClass = ($index + 1) % 4 === 0 ? '' : 'border-right';
                    @endphp
                    <div class="team-col member-col {{ $borderClass }}">
                        <div class="profile-card member-card">
                            <div class="profile-img-box">
                                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="profile-diag">
                                    <line x1="0" y1="100" x2="100" y2="0" stroke="rgba(0,0,0,0.5)" stroke-width="1"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                                <img src="{{ asset($member->image) }}"
                                    alt="{{ $member->getTranslation('name', $locale) }}">
                            </div>
                            <h3>{!! nl2br(e($member->getTranslation('name', $locale))) !!}</h3>
                            <p class="role">{{ $member->getTranslation('role', $locale) }}</p>
                            <div class="bio-text">
                                {!! $member->getTranslation('bio', $locale) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
