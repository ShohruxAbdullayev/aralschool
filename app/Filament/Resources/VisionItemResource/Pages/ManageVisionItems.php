<?php

namespace App\Filament\Resources\VisionItemResource\Pages;

use App\Filament\Resources\VisionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageVisionItems extends ManageRecords
{
    use Translatable;

    protected static string $resource = VisionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
