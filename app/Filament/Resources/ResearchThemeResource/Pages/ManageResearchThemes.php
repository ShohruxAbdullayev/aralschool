<?php

namespace App\Filament\Resources\ResearchThemeResource\Pages;

use App\Filament\Resources\ResearchThemeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageResearchThemes extends ManageRecords
{
    use Translatable;

    protected static string $resource = ResearchThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
