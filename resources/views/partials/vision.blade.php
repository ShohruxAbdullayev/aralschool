@php
    $locale = app()->getLocale();
    $visionTitle = $settings['vision_title'] ?? 'Programme<br>vision';
    $visionClasses = ['box-about', 'box-center', 'box-goals', 'box-mission', 'box-bottom-right'];
@endphp

<section class="vision-section" id="programme">
    <div class="vision-inner">
        <div class="grid-line-v v1"></div>
        <div class="grid-line-v v2"></div>
        <div class="grid-line-v v3"></div>
        <div class="grid-line-h h-vision-0"></div>
        <div class="grid-line-h h-vision-1"></div>

        <svg class="vision-svg-lines" width="100%" height="100%" preserveAspectRatio="none">
            <line x1="33%" y1="600" x2="43%" y2="680" stroke="rgba(0,0,0,0.5)" stroke-width="1"></line>
            <line x1="68%" y1="720" x2="57%" y2="750" stroke="rgba(0,0,0,0.5)" stroke-width="1"></line>
            <line x1="43%" y1="860" x2="35%" y2="920" stroke="rgba(0,0,0,0.5)" stroke-width="1"></line>
        </svg>

        <div class="vision-text">
            <h2>{!! $visionTitle !!}</h2>
        </div>

        @foreach ($visionItems as $index => $item)
            @php
                $boxClass = $visionClasses[$index] ?? 'box-extra';
                $image = $item->image ?: null;
                $title = $item->title ? $item->getTranslation('title', $locale) : null;
            @endphp
            <div class="vision-box {{ $boxClass }}">
                @if ($image)
                    <img src="{{ asset($image) }}" alt="{{ $title ?? 'Vision' }}" class="vision-img">
                @endif
                @if ($title)
                    <div class="vision-label" onclick="openVisionModal('{{ $item->id }}')">
                        <span>{{ $title }}</span>
                        <div class="label-square"></div>
                    </div>
                @endif
            </div>
        @endforeach

        <div id="visionModal" class="vision-modal">
            <div class="vision-modal-header">
                <span id="visionModalTitle">Goals</span>
                <div class="vision-modal-close" onclick="closeVisionModal()">
                    <div class="close-square"></div>
                </div>
            </div>
            <div class="vision-modal-body">
                <p id="visionModalText"></p>
            </div>
        </div>
    </div>
</section>
