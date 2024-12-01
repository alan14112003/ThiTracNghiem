<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassroomResource\Pages;
use App\Filament\Resources\ClassroomResource\RelationManagers;
use App\Filament\Resources\StudentRelationManagerResource\RelationManagers\ClassroomResourceRelationManager;
use App\Filament\Resources\StudentRelationManagerResource\RelationManagers\StudentsRelationManager;
use App\Models\Classroom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassroomResource extends Resource
{
    protected static ?string $model = ClassRoom::class; // Model của lớp học
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap'; // Biểu tượng điều hướng
    protected static ?string $navigationLabel = 'Lớp Học'; // Nhãn điều hướng
    protected static ?string $label = 'Lớp Học'; // Tên đơn của đối tượng
    protected static ?string $pluralLabel = 'Các Lớp Học'; // Tên số nhiều của đối tượng
    protected static ?string $navigationGroup = 'Quản Lý Lớp Học'; // Nhóm điều hướng

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->unique()
                    ->label('Tên Lớp Học'),

                Forms\Components\Textarea::make('description')
                    ->label('Mô Tả')
                    ->nullable(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Lớp Học'),
            Tables\Columns\TextColumn::make('description')->label('Mô Tả')->limit(50),
            Tables\Columns\TextColumn::make('created_at')->label('Ngày Tạo')->dateTime(),
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
            StudentsRelationManager::class, // Đăng ký RelationManager
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClassrooms::route('/'),
            'create' => Pages\CreateClassroom::route('/create'),
            'edit' => Pages\EditClassroom::route('/{record}/edit'),
        ];
    }
}
