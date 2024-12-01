<?php

namespace App\Filament\Resources\QuizResource\Pages;

use App\Filament\Resources\QuizResource;
use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Collection;

class ListQuizzes extends ListRecords
{
    protected static string $resource = QuizResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Actions\CreateAction::make(),
    \EightyNine\ExcelImport\ExcelImportAction::make()
    ->processCollectionUsing(function (string $modelClass, Collection $collection) {
        // Mảng để lưu trữ thông tin bài thi và câu hỏi
        $quizzesData = [];

        foreach ($collection as $row) {
            // Kiểm tra nếu tiêu đề bài thi (quiz_title) không phải là chuỗi rỗng
            if (!empty($row['quiz_title'])) {
                // Lấy quiz từ tiêu đề (title) của mỗi row hoặc tạo mới nếu chưa có
                if (!isset($quizzesData[$row['quiz_title']])) {
                    $quizzesData[$row['quiz_title']] = [
                        'title' => $row['quiz_title'],
                        'description' => $row['quiz_description'] ?? '',
                        'total_questions' => $row['total_questions'] ?? 0,
                        'duration' => $row['quiz_duration'] ?? 0,
                        'level' => $row['quiz_level'] ?? 'basic', // Giá trị mặc định
                        'questions' => []
                    ];
                }

                // Gộp thông tin câu hỏi vào quiz tương ứng nếu câu hỏi không rỗng
                if (!empty($row['question_text'])) {
                    $questionData = [
                        'question_text' => $row['question_text'],
                        'type' => $row['question_type'] ?? 'multiple_choice', // Giá trị mặc định
                        'options' => []
                    ];

                    // Thêm các câu trả lời (options) vào mỗi câu hỏi
                    for ($i = 1; $i <= 4; $i++) { // Ví dụ có tối đa 4 lựa chọn (option)
                        if (!empty($row["option_$i"])) {
                            $questionData['options'][] = [
                                'option_text' => $row["option_$i"],
                                'is_correct' => $row["is_correct_option_$i"] == '1', // Xác định đúng/sai
                            ];
                        }
                    }

                    // Thêm câu hỏi vào mảng questions trong quiz
                    $quizzesData[$row['quiz_title']]['questions'][] = $questionData;
                }
            }
        }

        // Bắt đầu tạo hoặc cập nhật dữ liệu vào cơ sở dữ liệu
        foreach ($quizzesData as $quizData) {
            // Kiểm tra xem title của quiz có tồn tại và không phải là chuỗi rỗng
            if (!empty($quizData['title'])) {
                // Tạo hoặc lấy bài thi (quiz)
                $quiz = Quiz::create([
                    'title' => $quizData['title'],
                    'description' => $quizData['description'],
                    'total_questions' => $quizData['total_questions'],
                    'duration' => $quizData['duration'],
                    'level' => $quizData['level'],
                ]);

                // Tạo câu hỏi cho bài thi
                foreach ($quizData['questions'] as $questionData) {
                    if (!empty($questionData['question_text'])) {
                        $question = Question::create([
                            'quiz_id' => $quiz->id,
                            'question_text' => $questionData['question_text'],
                            'type' => $questionData['type'],
                        ]);

                        // Tạo các lựa chọn (options) cho câu hỏi
                        foreach ($questionData['options'] as $optionData) {
                            Option::create([
                                'question_id' => $question->id,
                                'option_text' => $optionData['option_text'],
                                'is_correct' => $optionData['is_correct'],
                            ]);
                        }
                    }
                }
            }
        }
    })

        ];
    }
}
