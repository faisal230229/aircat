<?php

namespace App\Filament\Resources\SeoTagResource\Pages;

use App\Filament\Resources\SeoTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeoTags extends ListRecords
{
    protected static string $resource = SeoTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
