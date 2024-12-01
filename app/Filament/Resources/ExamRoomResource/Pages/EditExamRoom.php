<?php

namespace App\Filament\Resources\ExamRoomResource\Pages;

use App\Filament\Resources\ExamRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamRoom extends EditRecord
{
    protected static string $resource = ExamRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
