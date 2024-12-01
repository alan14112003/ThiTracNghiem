<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamRoomResource\Pages;
use App\Filament\Resources\ExamRoomResource\RelationManagers;
use App\Models\ExamRoom;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamRoomResource extends Resource
{
    protected static ?string $model = ExamRoom::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Phòng Thi';
    protected static ?string $label = 'Phòng Thi';
    protected static ?string $pluralLabel = 'Các Phòng Thi';
    protected static ?string $navigationGroup = 'Quản Lý Phòng Thi';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Thêm section cho thông tin phòng thi
            Forms\Components\Section::make('Thông Tin Phòng Thi')
                ->schema([
                    Forms\Components\Grid::make(2) // Sử dụng Grid với 2 cột
                        ->schema([
                            Forms\Components\Select::make('quiz_id')
                                ->required()
                                ->label('Bài Thi')
                                ->relationship('quiz', 'title') // Liên kết đến trường title trong bảng quizzes
                                ->searchable()
                                ->preload()
                                ->placeholder('Chọn bài thi...')
                                ->helperText('Chọn bài thi mà phòng thi này thuộc về.'),

                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->label('Tên Phòng Thi')
                                ->placeholder('Nhập tên phòng thi...')
                                ->helperText('Tên phòng thi sẽ được hiển thị cho người dùng.'),

                            Forms\Components\DateTimePicker::make('start_time')
                                ->required()
                                ->reactive()
                                ->label('Thời Gian Bắt Đầu')
                                ->helperText('Chọn thời gian bắt đầu cho phòng thi.')
                                ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                    // Tính toán duration khi start_time được cập nhật
                                    $endTime = Carbon::parse($get('end_time')); // Chuyển đổi end_time sang Carbon
                                    $startTime = Carbon::parse($state); // Chuyển đổi start_time sang Carbon
                                    if ($endTime) {
                                        $duration = $endTime->diffInMinutes( $startTime);
                                         $set('duration', $duration);
                                        return $duration; // Trả về duration tính toán
                                    }
                                }),

                            Forms\Components\DateTimePicker::make('end_time')
                                ->required()
                                ->reactive()
                                ->label('Thời Gian Kết Thúc')
                                ->helperText('Chọn thời gian kết thúc cho phòng thi.')
                                ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                    // Tính toán duration khi end_time được cập nhật
                                    $endTime = Carbon::parse($state); // Chuyển đổi end_time sang Carbon
                                    $startTime = Carbon::parse($get('start_time')); // Chuyển đổi start_time sang Carbon
                                    if ($startTime) {
                                        $duration = $startTime->diffInMinutes( $endTime);
                                         $set('duration', $duration);
                                        return $duration; // Trả về duration tính toán
                                    }
                                }),
                                Forms\Components\TextInput::make('duration')
                                ->label('Thời Gian (phút)')
                                ->required()
                                ->dehydrated()
                                ->helperText('Thời gian phòng thi được tính tự động từ thời gian bắt đầu và kết thúc.'),
                        ]),
                        Forms\Components\TextInput::make('room_code')
                        ->required()
                        ->label('Mã Phòng Thi')
                        ->unique('exam_rooms', 'room_code', ignoreRecord: true) // Đảm bảo mã phòng thi là duy nhất
                        ->placeholder('Nhập mã phòng thi...')
                        ->helperText('Mã phòng thi cần phải duy nhất và được sử dụng để định danh phòng.'),
                        Forms\Components\Select::make('created_by')
                        ->label('Người Tạo')
                        ->relationship('creator', 'name') // Liên kết đến bảng users
                        ->default(auth()->user()->id) // Đặt giá trị mặc định là ID của user đang đăng nhập
                        ->dehydrated()
                        ->disabled(false) // Không disable để đảm bảo giá trị được truyền lên server
                        ->required(), // Đảm bảo trường này có giá trị
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quiz.title')
                    ->label('Đề Thi') // Thay đổi thành tiếng Việt
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Tên Người Dùng') // Đổi tên cột sang tiếng Việt
                    ->searchable(),

                Tables\Columns\TextColumn::make('room_code')
                    ->label('Mã Phòng') // Thêm mã phòng
                    ->sortable(),

                Tables\Columns\TextColumn::make('start_time')
                    ->label('Thời Gian Bắt Đầu') // Thay đổi thành tiếng Việt
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('duration')
                    ->label('Thời Lượng (phút)') // Thêm thời lượng
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
            'index' => Pages\ListExamRooms::route('/'),
            'create' => Pages\CreateExamRoom::route('/create'),
            'edit' => Pages\EditExamRoom::route('/{record}/edit'),
        ];
    }
}
