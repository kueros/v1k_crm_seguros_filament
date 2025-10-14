<?php

namespace App\Filament\Resources\InsuranceClientResource\Pages;

use App\Filament\Resources\InsuranceClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInsuranceClients extends ListRecords
{
    protected static string $resource = InsuranceClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
