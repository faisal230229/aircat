<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';

    protected static ?string $navigationGroup = 'Frontend CMS';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('heading')
                    ->required()
                    ->rows(5)
                    ->maxLength(255),
                TextInput::make('order')
                    ->required()
                    ->numeric(),
                Forms\Components\Fieldset::make('Slider Image')
                    ->schema([
                        TextInput::make('alt_text')
                            ->label('Alt Text')
                            ->afterStateHydrated(function ($component, $state, $record) {
                                if ($record) {
                                    $mediaItem = $record->getFirstMedia(); // Adjust 'slider_images' to your collection name
                                    if ($mediaItem) {
                                        $component->state($mediaItem->getCustomProperty('alt_text', ''));
                                    }
                                }
                            })
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('image')
                            ->required()
                            ->image()
                            ->imageEditor()
                            ->customProperties(fn (Forms\Get $get) => ['alt_text' => $get('alt_text')])

                    ]),
                Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image'),
                Tables\Columns\TextColumn::make('heading')
                    ->words(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->badge()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
