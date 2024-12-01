<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomParticipantResource\Pages;
use App\Filament\Resources\RoomParticipantResource\RelationManagers;
use App\Models\RoomParticipant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomParticipantResource extends Resource
{
    protected static ?string $model = RoomParticipant::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Người Tham Gia';
    protected static ?string $label = 'Người Tham Gia';
    protected static ?string $pluralLabel = 'Các Người Tham Gia';
    protected static ?string $navigationGroup = 'Quản Lý Phòng Thi';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin người tham gia phòng thi
            Forms\Components\Section::make('Thông Tin Người Tham Gia')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\Select::make('exam_room_id')
                                ->required()
                                ->label('Phòng Thi')
                                ->relationship('examRoom', 'name') // Liên kết đến trường name trong bảng exam_rooms
                                ->searchable()
                                ->placeholder('Chọn phòng thi...')
                                ->helperText('Chọn phòng thi mà người tham gia này thuộc về.'),

                            Forms\Components\Select::make('user_id')
                                ->required()
                                ->label('Người Dùng')
                                ->relationship('user', 'full_name') // Liên kết đến trường full_name trong bảng users
                                ->searchable()
                                ->placeholder('Chọn người dùng...')
                                ->helperText('Chọn người dùng tham gia phòng thi này.'),

                            Forms\Components\Toggle::make('status')
                                ->label('Trạng Thái')
                                ->required()
                                ->helperText('Chọn trạng thái tham gia của người dùng.'),

                            Forms\Components\TextInput::make('score')
                                ->numeric()
                                ->label('Điểm')
                                ->placeholder('Nhập điểm của người tham gia...')
                                ->helperText('Nhập điểm của người tham gia trong phòng thi.'),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('exam_room.name')->label('Exam Room'),
                Tables\Columns\TextColumn::make('user.name')->label('User Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRoomParticipants::route('/'),
            'create' => Pages\CreateRoomParticipant::route('/create'),
            'edit' => Pages\EditRoomParticipant::route('/{record}/edit'),
        ];
    }
}
