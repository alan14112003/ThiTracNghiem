<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionResource extends Resource
{

    protected static ?string $model = Question::class;
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationLabel = 'Câu Hỏi';
    protected static ?string $label = 'Câu Hỏi';
    protected static ?string $pluralLabel = 'Các Câu Hỏi';
    protected static ?string $navigationGroup = 'Quản Lý Bài Thi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Thêm section cho thông tin câu hỏi
                Forms\Components\Section::make('Thông Tin Câu Hỏi')
                    ->schema([
                        Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                            ->schema([
                                Forms\Components\Select::make('quiz_id')
                                    ->required()
                                    ->label('Quiz')
                                    ->searchable()
                                    ->preload()
                                    ->relationship('quiz', 'title') // Liên kết đến trường title trong bảng quizzes
                                    ->placeholder('Chọn bài thi...')
                                    ->helperText('Chọn bài thi mà câu hỏi này thuộc về.'),



                                Forms\Components\Select::make('type')
                                    ->required()
                                    ->label('Loại Câu Hỏi')
                                    ->options([
                                        'multiple_choice' => 'Trắc Nghiệm',
                                        'true_false' => 'Đúng/Sai',
                                        'value' => 'Giá trị',
                                    ])
                                    ->placeholder('Chọn loại câu hỏi...')
                                    ->helperText('Chọn loại câu hỏi cho câu hỏi này.'),
                                        Forms\Components\RichEditor::make('question_text')
                                        ->required()
                                        ->columnSpanFull()
                                        ->label('Nội Dung Câu Hỏi')
                                        ->placeholder('Nhập nội dung câu hỏi...')
                                        ->helperText('Câu hỏi sẽ được hiển thị cho người tham gia bài thi.'),
                            ]),
                    ]),

                // Thêm Repeater cho Options
                Forms\Components\Repeater::make('options')
                    ->label('Tùy Chọn')
                    ->relationship('options') // Đảm bảo rằng Repeater liên kết đúng với quan hệ 'options'

                    ->schema([
                        Forms\Components\TextInput::make('option_text')
                            ->required()
                            ->label('Nội Dung Tùy Chọn')
                            ->placeholder('Nhập nội dung tùy chọn...'),

                        Forms\Components\Checkbox::make('is_correct')
                            ->label('Đáp Án Đúng'),
                    ])
                    ->columnSpanFull()
                ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quiz.title')->label('Bài thi'),
                Tables\Columns\TextColumn::make('question_text')
                    ->label('Nội dung câu hỏi')
                    ->searchable()
                    ->limit(50), // Giới hạn chiều dài text (50 ký tự)
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
