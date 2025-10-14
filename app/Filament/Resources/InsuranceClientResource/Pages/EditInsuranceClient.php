<?php

namespace App\Filament\Resources\InsuranceClientResource\Pages;

use App\Filament\Resources\InsuranceClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInsuranceClient extends EditRecord
{
    protected static string $resource = InsuranceClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
