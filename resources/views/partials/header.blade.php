@php
    $navItems = [
        ['href' => '#about',     'label' => $settings['nav_about'] ?? 'Aral School'],
        ['href' => '#programme', 'label' => $settings['nav_programme'] ?? 'Programme'],
        ['href' => '#apply',     'label' => $settings['nav_apply'] ?? 'Apply'],
        ['href' => '#team',      'label' => $settings['nav_team'] ?? 'Team'],
        ['href' => '#faq',       'label' => $settings['nav_faq'] ?? 'FAQ'],
        ['href' => '#about-acdf','label' => $settings['nav_about_acdf'] ?? 'About ACDF'],
        ['href' => '#summit',    'label' => $settings['nav_summit'] ?? 'Aral Culture Summit'],
    ];
@endphp

<div class="header-wrapper">
    <div class="top-banner">
        <div class="banner-inner">
            <div class="banner-text">
                {{ $settings['top_banner'] ?? 'Apply to the Aral School – Deadline 5th of October 2025' }}
            </div>
            @include('partials.lang-switcher', ['class' => 'lang-switcher'])
        </div>
    </div>

    <header class="main-header">
        <div class="container header-inner">
            <div class="header-logo-container">
                <div class="logo-top-row">
                    <a href="#" class="logo-text">Aral</a>
                    <div class="mobile-logo-square"></div>
                </div>
                <a href="#" class="logo-text">school</a>
            </div>

            <nav class="main-nav">
                <ul>
                    @foreach ($navItems as $item)
                        <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </nav>

            <div class="mobile-nav-toggle" id="mobileNavToggle">
                <div class="toggle-square"></div>
            </div>
        </div>
    </header>
</div>

<div class="mobile-menu-overlay" id="mobileMenu">
    <div class="mobile-menu-inner">
        <nav class="mobile-nav">
            <ul>
                @foreach ($navItems as $item)
                    <li><a href="{{ $item['href'] }}" onclick="toggleMobileMenu()">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        @include('partials.lang-switcher', ['class' => 'mobile-lang-switcher'])
    </div>
</div>
