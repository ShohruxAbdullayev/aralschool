@php
    $newsletterTitle = $footerSettings['newsletter_title'] ?? 'NEWSLETTER';
    $newsletterPlaceholder = $footerSettings['newsletter_placeholder'] ?? 'Enter your email';
    $newsletterButton = $footerSettings['newsletter_button'] ?? 'Subscribe';
    $contactTitle = $footerSettings['contact_title'] ?? 'CONTACT';
    $contactText = $footerSettings['contact_text'] ?? 'Uzbekistan Art and Culture Development Foundation<br>Address: 1, Taras Shevchenko str., Tashkent,<br>100029, Uzbekistan<br>Phone: +998 (71) 207 40 80';
    $generalTitle = $footerSettings['general_inquiries_title'] ?? 'GENERAL INQUIRIES';
    $generalEmail = $footerSettings['general_inquiries_email'] ?? 'info@aralschool.uz';
    $socialTitle = $footerSettings['social_media_title'] ?? 'SOCIAL MEDIA';
    $linkedinLabel = $footerSettings['social_linkedin_label'] ?? 'LinkedIn ↗';
    $linkedinUrl = $footerSettings['social_linkedin_url'] ?? '#';
    $instagramLabel = $footerSettings['social_instagram_label'] ?? 'Instagram ↗';
    $instagramUrl = $footerSettings['social_instagram_url'] ?? '#';
    $organiserTitle = $footerSettings['organiser_title'] ?? 'Organiser';
    $organiserText = $footerSettings['organiser_text'] ?? 'Uzbekistan Art and Culture<br>Development Foundation';
    $privacyLabel = $footerSettings['policy_privacy_label'] ?? '• Privacy policy';
    $privacyUrl = $footerSettings['policy_privacy_url'] ?? '#';
    $cookieLabel = $footerSettings['policy_cookie_label'] ?? '• Cookie policy';
    $cookieUrl = $footerSettings['policy_cookie_url'] ?? '#';
@endphp

<footer class="site-footer" id="summit">
    <div class="footer-inner">
        <div class="footer-newsletter">
            <h4 class="footer-h4 mb-extra">{{ $newsletterTitle }}</h4>
            <div class="newsletter-form">
                <input type="text" placeholder="{{ $newsletterPlaceholder }}">
                <button>{{ $newsletterButton }}</button>
            </div>
        </div>

        <div class="footer-col-1">
            <div class="footer-info">
                <div class="footer-block">
                    <h4 class="footer-h4">{{ $contactTitle }}</h4>
                    <p class="footer-p">{!! $contactText !!}</p>
                </div>
                <div class="footer-block">
                    <h4 class="footer-h4">{{ $generalTitle }}</h4>
                    <p class="footer-p"><a href="mailto:{{ $generalEmail }}">{{ $generalEmail }}</a></p>
                </div>
            </div>
            <div class="footer-brand">Aral</div>
            <div class="footer-node-black"></div>
        </div>

        <div class="footer-col-2">
            <div class="footer-info">
                <div class="footer-block">
                    <h4 class="footer-h4">{{ $socialTitle }}</h4>
                    <p class="footer-p"><a href="{{ $linkedinUrl }}">{{ $linkedinLabel }}</a><br>
                        <a href="{{ $instagramUrl }}">{{ $instagramLabel }}</a>
                    </p>
                </div>
            </div>
            <div class="footer-brand">school</div>
        </div>

        <div class="footer-bottom-info">
            <div class="footer-organiser-flex">
                <div class="footer-organiser-text">
                    <h4 class="footer-h4" style="text-transform:none;">{{ $organiserTitle }}</h4>
                    <p class="footer-p">{!! $organiserText !!}</p>
                </div>
                <div class="footer-policy">
                    <a href="{{ $privacyUrl }}">{{ $privacyLabel }}</a>
                    <a href="{{ $cookieUrl }}">{{ $cookieLabel }}</a>
                </div>
            </div>
            <div class="footer-logo-wrap">
                <img src="{{ asset('img/logo.png') }}" alt="ACDF Logo" class="footer-u-logo">
            </div>
        </div>
    </div>
</footer>
