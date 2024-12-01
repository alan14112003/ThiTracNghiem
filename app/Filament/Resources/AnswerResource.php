<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswerResource\Pages;
use App\Filament\Resources\AnswerResource\RelationManagers;
use App\Models\Answer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnswerResource extends Resource
{
    protected static ?string $model = Answer::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Câu Trả Lời';
    protected static ?string $label = 'Câu Trả Lời';
    protected static ?string $pluralLabel = 'Các Câu Trả Lời';
    protected static ?string $navigationGroup ='Quản Lý Kết Quả Quiz';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin câu trả lời
            Forms\Components\Section::make('Thông Tin Câu Trả Lời')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\Select::make('quiz_attempt_id')
                                ->required()
                                ->label('Quiz Attempt')
                                ->relationship('quizAttempt', 'id') // Liên kết đến trường id trong bảng quiz_attempts
                                ->searchable()
                                ->placeholder('Chọn thử nghiệm quiz...')
                                ->helperText('Chọn thử nghiệm quiz mà câu trả lời này thuộc về.'),

                            Forms\Components\Select::make('question_id')
                                ->required()
                                ->label('Câu Hỏi')
                                ->relationship('question', 'question_text') // Liên kết đến trường question_text trong bảng questions
                                ->searchable()
                                ->placeholder('Chọn câu hỏi...')
                                ->helperText('Chọn câu hỏi mà câu trả lời này tương ứng.'),

                            Forms\Components\Select::make('option_id')
                                ->required()
                                ->label('Lựa Chọn')
                                ->relationship('option', 'option_text') // Liên kết đến trường option_text trong bảng options
                                ->searchable()
                                ->placeholder('Chọn lựa chọn...')
                                ->helperText('Chọn lựa chọn mà người dùng đã chọn cho câu hỏi này.'),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quizAttempt.id')
                    ->label('ID Lần Thử')
                    ->searchable(),

                Tables\Columns\TextColumn::make('question.question_text')
                    ->label('Câu Hỏi')
                    ->searchable()
                    ->limit(30), // Giới hạn hiển thị 30 ký tự cho câu hỏi dài,

                Tables\Columns\TextColumn::make(name: 'option.option_text')
                    ->label('Lựa Chọn Đã Chọn')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswer::route('/create'),
            'edit' => Pages\EditAnswer::route('/{record}/edit'),
        ];
    }
}
