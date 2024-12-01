<?php

namespace App\Filament\Resources\RoomParticipantResource\Pages;

use App\Filament\Resources\RoomParticipantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoomParticipant extends EditRecord
{
    protected static string $resource = RoomParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
