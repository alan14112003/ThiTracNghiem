<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class; // Model của học sinh
    protected static ?string $navigationIcon = 'heroicon-o-user'; // Biểu tượng điều hướng
    protected static ?string $navigationLabel = 'Học Sinh'; // Nhãn điều hướng
    protected static ?string $label = 'Học Sinh'; // Tên đơn của đối tượng
    protected static ?string $pluralLabel = 'Các Học Sinh'; // Tên số nhiều của đối tượng
    protected static ?string $navigationGroup = 'Quản Lý Lớp Học'; // Nhóm điều hướng

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Tên Học Sinh'),

            Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->unique()
                ->label('Email'),

            Forms\Components\Select::make('classroom_id')
                ->relationship('classroom', 'name')
                ->required()
                ->label('Lớp Học')
                ->searchable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Học Sinh'),
            Tables\Columns\TextColumn::make('email')->label('Email'),
            Tables\Columns\TextColumn::make('classroom.name')->label('Lớp Học'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
