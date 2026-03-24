@php
    $locale = app()->getLocale();
    $faqTitle = $settings['faq_title'] ?? 'FAQ';
@endphp

<section class="faq-section" id="faq">
    <div class="faq-inner">
        <div class="faq-row border-bottom-light">
            <div class="faq-col border-right-light title-col-faq">
                <h2 class="faq-title">{{ $faqTitle }}</h2>
            </div>
            <div class="faq-col border-right-light img-col">
                <div class="faq-img bg-dome" style="background-position: left center;"></div>
                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="faq-diag">
                    <line x1="0" y1="0" x2="100" y2="100" stroke="rgba(255,255,255,0.5)" stroke-width="1"
                        vector-effect="non-scaling-stroke" />
                </svg>
            </div>
            <div class="faq-col border-right-light img-col">
                <div class="faq-img bg-dome" style="background-position: right center;"></div>
            </div>
            <div class="faq-col"></div>
        </div>

        <div class="faq-row row-modal" style="justify-content: center; position: relative;">
            <div class="faq-bg-layer">
                <div class="faq-img bg-berries"></div>
                <div class="faq-img bg-crown"></div>
                <div class="faq-col border-right-light"></div>
                <div class="faq-col border-right-light"></div>
                <div class="faq-col border-right-light"></div>
                <div class="faq-col"></div>
            </div>

            <div class="faq-modal-col">
                <div class="faq-node-sq"></div>
                <div class="faq-modal-inner">
                    <div class="faq-modal-half border-right-dark">
                        @foreach ($faqsLeft as $faq)
                            <div class="faq-item border-bottom-dark">
                                <div class="faq-q">
                                    <span>{{ $faq->getTranslation('question', $locale) }}</span>
                                    <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path d="M6 9l6 6 6-6" />
                                        </svg></div>
                                </div>
                                <div class="faq-a">
                                    <p>{{ $faq->getTranslation('answer', $locale) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="faq-modal-half">
                        @foreach ($faqsRight as $faq)
                            <div class="faq-item border-bottom-dark">
                                <div class="faq-q">
                                    <span>{{ $faq->getTranslation('question', $locale) }}</span>
                                    <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path d="M6 9l6 6 6-6" />
                                        </svg></div>
                                </div>
                                <div class="faq-a">
                                    <p>{{ $faq->getTranslation('answer', $locale) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
