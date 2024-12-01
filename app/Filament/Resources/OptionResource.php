<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OptionResource\Pages;
use App\Filament\Resources\OptionResource\RelationManagers;
use App\Models\Option;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OptionResource extends Resource
{
    protected static ?string $model = Option::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationLabel = 'Phương Án';
    protected static ?string $label = 'Phương Án';
    protected static ?string $pluralLabel = 'Các Phương Án';
    protected static ?string $navigationGroup = 'Quản Lý Bài Thi';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin tùy chọn
            Forms\Components\Section::make('Thông Tin Tùy Chọn')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\Select::make('question_id')
                                ->required()
                                ->label('Câu Hỏi')
                                ->searchable()
                                ->relationship('question', 'question_text') // Liên kết đến trường question_text trong bảng questions
                                ->placeholder('Chọn câu hỏi...')
                                ->helperText('Chọn câu hỏi mà tùy chọn này thuộc về.'),

                            Forms\Components\Textarea::make('option_text')
                                ->required()
                                ->label('Nội Dung Tùy Chọn')
                                ->placeholder('Nhập nội dung tùy chọn...')
                                ->helperText('Nội dung của tùy chọn sẽ được hiển thị cho người tham gia bài thi.'),

                            Forms\Components\Toggle::make('is_correct')
                                ->label('Đáp Án Đúng')
                                ->helperText('Đánh dấu nếu tùy chọn này là đáp án đúng cho câu hỏi.'),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question.question_text')->label('Câu hỏi'),
                Tables\Columns\TextColumn::make('option_text')->label('Tùy chọn'),
                Tables\Columns\BooleanColumn::make('is_correct')->label('Đúng/Sai'),
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
            'index' => Pages\ListOptions::route('/'),
            'create' => Pages\CreateOption::route('/create'),
            'edit' => Pages\EditOption::route('/{record}/edit'),
        ];
    }
}
