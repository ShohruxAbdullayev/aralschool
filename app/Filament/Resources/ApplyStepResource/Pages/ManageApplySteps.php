<?php

namespace App\Filament\Resources\ApplyStepResource\Pages;

use App\Filament\Resources\ApplyStepResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageApplySteps extends ManageRecords
{
    use Translatable;

    protected static string $resource = ApplyStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
