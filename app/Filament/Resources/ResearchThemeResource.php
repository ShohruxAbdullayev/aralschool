<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResearchThemeResource\Pages;
use App\Models\ResearchTheme;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ResearchThemeResource extends Resource
{
    use Translatable;

    protected static ?string $model = ResearchTheme::class;

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public_media')
                    ->directory('img')
                    ->preserveFilenames(),
                Forms\Components\TextInput::make('number')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('number')->sortable(),
                Tables\Columns\TextColumn::make('title')->limit(40),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->defaultSort('sort_order')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageResearchThemes::route('/'),
        ];
    }
}
