<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizAttemptResource\Pages;
use App\Filament\Resources\QuizAttemptResource\RelationManagers;
use App\Models\QuizAttempt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuizAttemptResource extends Resource
{
    protected static ?string $model = QuizAttempt::class;
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationLabel = 'Lượt Làm Quiz';
    protected static ?string $label = 'Lượt Làm Quiz';
    protected static ?string $pluralLabel = 'Các Lượt Làm Quiz';
    protected static ?string $navigationGroup = 'Quản Lý Kết Quả Quiz';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin thử nghiệm quiz
            Forms\Components\Section::make('Thông Tin Thử Nghiệm Quiz')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\Select::make('user_id')
                                ->required()
                                ->label('Người Dùng')
                                ->relationship('user', 'name') // Liên kết đến trường name trong bảng users
                                ->searchable()
                                ->placeholder('Chọn người dùng...')
                                ->helperText('Chọn người dùng tham gia bài quiz này.'),

                            Forms\Components\Select::make('quiz_id')
                                ->required()
                                ->label('Quiz')
                                ->relationship('quiz', 'title') // Liên kết đến trường title trong bảng quizzes
                                ->searchable()
                                ->placeholder('Chọn bài thi...')
                                ->helperText('Chọn quiz mà người dùng sẽ tham gia.'),

                            Forms\Components\TextInput::make('score')
                                ->numeric()
                                ->label('Điểm')
                                ->placeholder('Nhập điểm số đạt được...')
                                ->helperText('Nhập điểm mà người dùng đã đạt được trong quiz này.'),

                            Forms\Components\DateTimePicker::make('completed_at')
                                ->label('Thời Gian Hoàn Thành')
                                ->placeholder('Chọn thời gian hoàn thành...')
                                ->helperText('Chọn thời gian người dùng hoàn thành bài quiz.'),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quiz.title')
                    ->label('Tên Quiz') // Thay đổi label sang tiếng Việt

                    ->sortable(), // Cho phép sắp xếp theo tiêu đề

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tên Người Dùng') // Thay đổi label sang tiếng Việt

                    ->sortable(), // Cho phép sắp xếp theo tên người dùng

                Tables\Columns\TextColumn::make('score')
                    ->label('Điểm Số') // Thay đổi label sang tiếng Việt
                    ->sortable(), // Cho phép sắp xếp theo điểm số

                Tables\Columns\TextColumn::make('finished_at') // Thay đổi từ completed_at thành finished_at
                    ->label('Hoàn Thành Lúc') // Thay đổi label sang tiếng Việt
                    ->dateTime() // Hiển thị dưới dạng ngày giờ
                    ->sortable(), // Cho phép sắp xếp theo thời gian hoàn thành
                Tables\Columns\TextColumn::make('violate_count')
                    ->label('Số vi phạm') // Thay đổi label sang tiếng Việt
                    ->sortable(), // Cho phép sắp xếp theo điểm số

            ])
            ->filters([
                // Bạn có thể thêm bộ lọc nếu cần
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('viewVideo')
                    ->label('Xem Video')
                    ->icon('heroicon-o-play')
                    ->url(fn (QuizAttempt $record) => QuizAttemptResource::getUrl('video-view', ['record' => $record->id]))
//                    ->openUrlInNewTab(), // Nếu muốn mở trong tab mới

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
            'index' => Pages\ListQuizAttempts::route('/'),
            'create' => Pages\CreateQuizAttempt::route('/create'),
            'edit' => Pages\EditQuizAttempt::route('/{record}/edit'),
            'video-view' => Pages\VideoView::route('/{record}/video-view'),
        ];
    }
}
