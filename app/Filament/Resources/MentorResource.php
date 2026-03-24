<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MentorResource\Pages;
use App\Models\Mentor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MentorResource extends Resource
{
    use Translatable;

    protected static ?string $model = Mentor::class;

    protected static ?string $navigationGroup = 'People';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public_media')
                    ->directory('img')
                    ->preserveFilenames(),
                Forms\Components\Select::make('category')
                    ->options([
                        'water' => 'Water',
                        'food' => 'Food',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('bio')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('category')->badge(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
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
            'index' => Pages\ManageMentors::route('/'),
        ];
    }
}
