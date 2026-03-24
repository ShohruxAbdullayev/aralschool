<?php

namespace App\Filament\Resources\FooterSettingResource\Pages;

use App\Filament\Resources\FooterSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageFooterSettings extends ManageRecords
{
    use Translatable;

    protected static string $resource = FooterSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
