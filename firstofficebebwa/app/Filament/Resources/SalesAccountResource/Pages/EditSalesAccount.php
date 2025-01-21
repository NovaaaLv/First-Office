<?php

namespace App\Filament\Resources\SalesAccountResource\Pages;

use App\Filament\Resources\SalesAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalesAccount extends EditRecord
{
    protected static string $resource = SalesAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
