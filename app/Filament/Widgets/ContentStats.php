<?php

namespace App\Filament\Widgets;

use App\Models\ApplyStep;
use App\Models\Faq;
use App\Models\Mentor;
use App\Models\Outcome;
use App\Models\ResearchTheme;
use App\Models\TeamMember;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContentStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Team Members', TeamMember::count()),
            Stat::make('Mentors', Mentor::count()),
            Stat::make('FAQs', Faq::count()),
            Stat::make('Research Themes', ResearchTheme::count()),
            Stat::make('Outcomes', Outcome::count()),
            Stat::make('Apply Steps', ApplyStep::count()),
        ];
    }
}
