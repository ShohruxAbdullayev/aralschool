<?php

namespace App\Filament\Resources\HeroSectionResource\Pages;

use App\Filament\Resources\HeroSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageHeroSections extends ManageRecords
{
    use Translatable;

    protected static string $resource = HeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
