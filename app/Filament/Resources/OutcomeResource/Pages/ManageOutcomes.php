<?php

namespace App\Filament\Resources\OutcomeResource\Pages;

use App\Filament\Resources\OutcomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageOutcomes extends ManageRecords
{
    use Translatable;

    protected static string $resource = OutcomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
