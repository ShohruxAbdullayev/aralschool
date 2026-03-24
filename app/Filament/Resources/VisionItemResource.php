<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionItemResource\Pages;
use App\Models\VisionItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VisionItemResource extends Resource
{
    use Translatable;

    protected static ?string $model = VisionItem::class;

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public_media')
                    ->directory('img')
                    ->preserveFilenames(),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\RichEditor::make('text')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
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
            'index' => Pages\ManageVisionItems::route('/'),
        ];
    }
}
