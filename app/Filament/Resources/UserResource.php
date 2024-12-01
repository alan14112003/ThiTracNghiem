<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Người Dùng';
    protected static ?string $label = 'Người Dùng';
    protected static ?string $pluralLabel = 'Các Người Dùng';
    protected static ?string $navigationGroup = 'Quản Lý Người Dùng';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Thông tin cá nhân') // Tiêu đề cho phần thông tin cá nhân
                ->schema([
                    Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(255)
                                ->label('Họ và tên'), // Nhãn cho trường họ và tên

                            Forms\Components\TextInput::make('email')
                                ->email()
                                ->required()
                                ->maxLength(255)
                                ->label('Địa chỉ Email'), // Nhãn cho trường email

                            Forms\Components\DateTimePicker::make('email_verified_at')
                                ->label('Thời gian xác thực Email'), // Nhãn cho trường xác thực email

                            Forms\Components\TextInput::make('password')
                                ->password()
                                ->required()
                                ->maxLength(255)
                                ->label('Mật khẩu'), // Nhãn cho trường mật khẩu
                        ]),
                ]),

            Forms\Components\Section::make('Thông tin lớp học') // Tiêu đề cho phần thông tin lớp học
                ->schema([
                    Forms\Components\Select::make('class_id') // Sử dụng Select cho lớp học
                        ->label('Lớp học') // Nhãn cho trường select
                        ->relationship('classroom', 'name') // Thiết lập quan hệ với trường name của model Classroom
                        ->required(), // Có thể yêu cầu trường này nếu cần
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
