<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizResource\Pages;
use App\Filament\Resources\QuizResource\RelationManagers;
use App\Models\Quiz;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuizResource extends Resource
{
    protected static ?string $model = Quiz::class;
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';
    protected static ?string $navigationLabel = 'Bài Thi';
    protected static ?string $label = 'Bài Thi';
    protected static ?string $pluralLabel = 'Các Bài Thi';
    protected static ?string $navigationGroup = 'Quản Lý Bài Thi';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin cơ bản
            Forms\Components\Section::make('Thông Tin Cơ Bản')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->label('Tiêu Đề')
                                ->placeholder('Nhập tiêu đề của bài thi...')
                                ->helperText('Tiêu đề này sẽ hiển thị cho người dùng khi họ tham gia bài thi.'),

                            Forms\Components\Textarea::make('description')
                                ->required()
                                ->label('Mô Tả')
                                ->placeholder('Nhập mô tả cho bài thi...')
                                ->helperText('Cung cấp mô tả ngắn gọn về nội dung và mục tiêu của bài thi.'),

                            Forms\Components\Select::make('level')
                                ->required()
                                ->label('Cấp Độ')
                                ->options([
                                    'easy' => 'Dễ',
                                    'medium' => 'Trung Bình',
                                    'hard' => 'Khó',
                                ])
                                ->placeholder('Chọn cấp độ bài thi...')
                                ->helperText('Chọn cấp độ của bài thi: Dễ, Trung Bình hoặc Khó.'),

                            Forms\Components\TextInput::make('total_questions')
                                ->required()
                                ->numeric()
                                ->label('Tổng Số Câu Hỏi')
                                ->placeholder('Nhập tổng số câu hỏi của bài thi...')
                                ->helperText('Nhập số lượng câu hỏi tối đa cho bài thi.'),
                                Forms\Components\FileUpload::make('image')
                                ->label('Ảnh Đại Diện')
                                ->image()
                                ->directory('quiz-images') // Lưu ảnh vào thư mục 'quiz-images'
                                ->helperText('Chọn ảnh đại diện cho quiz.'),
                        ]),
                ]),

            // Thêm section cho thời gian thi
            Forms\Components\Section::make('Thời Gian Thi')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([

                            Forms\Components\TextInput::make('duration')
                                ->numeric()
                                ->required()
                                ->label('Thời Gian (phút)')
                                ->placeholder('Nhập thời gian thi tối đa (phút)...')
                                ->helperText('Nhập thời gian tối đa cho bài thi bằng phút.'),
                        ]),
                ]),

            // Thêm Grid để bố trí cho các thông tin khác

        ]);
    }


    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')
                ->label('Tiêu đề')
                ->sortable()
                ->limit(50)

                ->searchable(),
            Tables\Columns\TextColumn::make('description')
                ->label('Mô tả')
                ->limit(50), // Giới hạn chiều dài văn bản của cột Mô tả (100 ký tự)
         
            Tables\Columns\TextColumn::make('duration')
                ->label('Thời lượng')
                ->sortable(),
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
            'index' => Pages\ListQuizzes::route('/'),
            'create' => Pages\CreateQuiz::route('/create'),
            'edit' => Pages\EditQuiz::route('/{record}/edit'),
        ];
    }
}
