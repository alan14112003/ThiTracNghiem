<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResultResource\Pages;
use App\Filament\Resources\ResultResource\RelationManagers;
use App\Models\Result;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Kết Quả Thi Trắc Nghiệm';
    protected static ?string $label = 'Kết Quả';
    protected static ?string $pluralLabel = 'Các Kết Quả Thi';
    protected static ?string $navigationGroup = 'Quản Lý Phòng Thi';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin kết quả
            Forms\Components\Section::make('Thông Tin Kết Quả')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\Select::make('room_participant_id')
                                ->required()
                                ->label('Người Tham Gia')
                                ->relationship('roomParticipant', 'id') // Liên kết đến trường id trong bảng room_participants
                                ->searchable()
                                ->placeholder('Chọn người tham gia...')
                                ->helperText('Chọn người tham gia mà kết quả này thuộc về.'),

                            Forms\Components\TextInput::make('total_score')
                                ->numeric()
                                ->required()
                                ->label('Tổng Điểm')
                                ->placeholder('Nhập tổng điểm của người tham gia...')
                                ->helperText('Nhập tổng điểm mà người tham gia đã đạt được.'),

                            Forms\Components\TextInput::make('correct_answers')
                                ->numeric()
                                ->label('Số Câu Đúng')
                                ->placeholder('Nhập số câu đúng...')
                                ->helperText('Nhập số câu hỏi mà người tham gia đã trả lời đúng.'),

                            Forms\Components\TextInput::make('wrong_answers')
                                ->numeric()
                                ->label('Số Câu Sai')
                                ->placeholder('Nhập số câu sai...')
                                ->helperText('Nhập số câu hỏi mà người tham gia đã trả lời sai.'),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('roomParticipant.user.name')
                    ->label('Tên Người Dùng') // Lấy tên người dùng từ quan hệ RoomParticipant -> User
                    ->searchable(),

                Tables\Columns\TextColumn::make('roomParticipant.examRoom.name')
                    ->label('Tên Phòng Thi') // Lấy tên phòng thi từ quan hệ RoomParticipant -> ExamRoom
                    ->searchable(),

                Tables\Columns\TextColumn::make('total_score')
                    ->label('Tổng Điểm')
                    ->sortable(),
            ])
            ->filters([
                // Bạn có thể thêm bộ lọc nếu cần
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
            'index' => Pages\ListResults::route('/'),
            'create' => Pages\CreateResult::route('/create'),
            'edit' => Pages\EditResult::route('/{record}/edit'),
        ];
    }
}
