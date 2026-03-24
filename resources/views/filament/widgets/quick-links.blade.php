<x-filament::widget>
    <x-filament::card>
        <div class="grid gap-3 md:grid-cols-3">
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.settings.index') }}">
                Settings
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.hero-sections.index') }}">
                Hero Section
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.intro-sections.index') }}">
                Intro Section
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.info-paragraphs.index') }}">
                Info Paragraphs
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.vision-items.index') }}">
                Programme Vision
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.research-themes.index') }}">
                Research Themes
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.outcomes.index') }}">
                Outcomes
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.apply-steps.index') }}">
                Apply Steps
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.team-members.index') }}">
                Team Members
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.mentors.index') }}">
                Mentors
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.faqs.index') }}">
                FAQs
            </x-filament::button>
            <x-filament::button tag="a" href="{{ route('filament.admin.resources.footer-settings.index') }}">
                Footer Settings
            </x-filament::button>
        </div>
    </x-filament::card>
</x-filament::widget>
