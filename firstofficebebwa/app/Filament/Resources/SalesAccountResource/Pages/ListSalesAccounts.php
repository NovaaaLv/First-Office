<?php

namespace App\Filament\Resources\SalesAccountResource\Pages;

use App\Filament\Resources\SalesAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSalesAccounts extends ListRecords
{
    protected static string $resource = SalesAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
