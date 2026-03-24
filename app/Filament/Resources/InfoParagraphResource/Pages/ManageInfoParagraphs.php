<?php

namespace App\Filament\Resources\InfoParagraphResource\Pages;

use App\Filament\Resources\InfoParagraphResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageInfoParagraphs extends ManageRecords
{
    use Translatable;

    protected static string $resource = InfoParagraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
