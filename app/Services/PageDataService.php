<?php

namespace App\Services;

use App\Models\ApplyStep;
use App\Models\Faq;
use App\Models\FooterSetting;
use App\Models\HeroSection;
use App\Models\InfoParagraph;
use App\Models\IntroSection;
use App\Models\Mentor;
use App\Models\Outcome;
use App\Models\ResearchTheme;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\VisionItem;
use Illuminate\Support\Facades\Cache;

class PageDataService
{
    private const CACHE_TTL = 3600; // 60 minutes

    public function getHomePageData(string $locale): array
    {
        return Cache::remember("home_page_{$locale}", self::CACHE_TTL, function () use ($locale) {
            return [
                'settings'          => $this->getSettings($locale),
                'footerSettings'    => $this->getFooterSettings($locale),
                'hero'              => HeroSection::first(),
                'intro'             => IntroSection::first(),
                'infoParagraphs'    => InfoParagraph::ordered()->get(),
                'visionItems'       => VisionItem::ordered()->get(),
                'researchThemes'    => ResearchTheme::ordered()->get(),
                'outcomes'          => Outcome::ordered()->get(),
                'applySteps'        => ApplyStep::ordered()->get(),
                'teamLeaders'       => TeamMember::where('role_type', 'leader')->ordered()->get(),
                'teamMembers'       => TeamMember::where('role_type', 'member')->ordered()->get(),
                'mentorsByCategory' => Mentor::ordered()->get()->groupBy('category'),
                'faqsLeft'          => Faq::where('column', 'left')->ordered()->get(),
                'faqsRight'         => Faq::where('column', 'right')->ordered()->get(),
            ];
        });
    }

    public function getVisionModalContent(string $locale): array
    {
        return Cache::remember("vision_modal_{$locale}", self::CACHE_TTL, function () use ($locale) {
            return VisionItem::ordered()->get()
                ->filter(fn (VisionItem $item) => $item->title && $item->text)
                ->mapWithKeys(fn (VisionItem $item) => [
                    (string) $item->id => [
                        'title' => $item->getTranslation('title', $locale),
                        'text'  => $item->getTranslation('text', $locale),
                    ],
                ])
                ->toArray();
        });
    }

    private function getSettings(string $locale): \Illuminate\Support\Collection
    {
        return Setting::all()->mapWithKeys(fn (Setting $s) => [
            $s->key => $s->getTranslation('value', $locale),
        ]);
    }

    private function getFooterSettings(string $locale): \Illuminate\Support\Collection
    {
        return FooterSetting::all()->mapWithKeys(fn (FooterSetting $s) => [
            $s->key => $s->getTranslation('value', $locale),
        ]);
    }
}
