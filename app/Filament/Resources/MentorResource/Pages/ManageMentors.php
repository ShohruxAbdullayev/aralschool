<?php

namespace App\Filament\Resources\MentorResource\Pages;

use App\Filament\Resources\MentorResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ManageMentors extends ManageRecords
{
    use Translatable;

    protected static string $resource = MentorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
