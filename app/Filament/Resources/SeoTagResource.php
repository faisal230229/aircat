<?php

namespace App\Filament\Resources;

use App\Enums\PageNameEnums;
use App\Filament\Resources\SeoTagResource\Pages;
use App\Filament\Resources\SeoTagResource\RelationManagers;
use App\Models\SeoTag;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use function Symfony\Component\Translation\t;

class SeoTagResource extends Resource
{
    protected static ?string $model = SeoTag::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Frontend CMS';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('page_name')
                    ->options(PageNameEnums::class)
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('meta_title')
                    ->required(),
                Textarea::make('meta_description')
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('meta_keywords')
                    ->required()
                    ->separator(','),
                Select::make('index')
                    ->required()
                    ->options([
                        'index' => 'Do Index',
                        'noindex' => 'No Index',
                    ]),
                Select::make('follow')
                    ->required()
                    ->options([
                        'follow' => 'Do Follow',
                        'nofollow' => 'No Follow',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_name')
                    ->badge()
                    ->color('primary'),
                TextColumn::make('meta_title')
                    ->searchable()
                    ->wrap()
                    ->sortable(),
                TextColumn::make('meta_description')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                TextColumn::make('meta_keywords')
                    ->badge()
                    ->separator(','),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                ])
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
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
            'index' => Pages\ListSeoTags::route('/'),
            'create' => Pages\CreateSeoTag::route('/create'),
            'edit' => Pages\EditSeoTag::route('/{record}/edit'),
        ];
    }
}
