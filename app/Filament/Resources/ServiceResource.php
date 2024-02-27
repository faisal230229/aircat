<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    protected static ?string $navigationGroup = 'Frontend CMS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->autocapitalize()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Textarea::make('short_desc')
                    ->required()
                    ->columnSpanFull(),
                TiptapEditor::make('content')
                    ->required()
                    ->output(TiptapOutput::Html)
                    ->extraInputAttributes(['style' => 'min-height: 12rem;'])
                    ->columnSpanFull(),
                ColorPicker::make('color')
                    ->required(),
                Section::make('Service Image')
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
                            ->columnSpan(2)
                            ->customProperties(fn (Forms\Get $get) => ['alt_text' => $get('alt_text')])

                    ])
                    ->columns(3),

                Section::make('Meta Tags')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('meta_description')
                            ->maxLength(255)
                            ->required(),

                        TagsInput::make('meta_keywords')
                            ->separator(',')
                            ->color('success')
                            ->required(),

                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('short_desc')
                    ->words(10)
                    ->searchable(),
                ColorColumn::make('color'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
