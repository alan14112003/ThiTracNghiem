<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\Question;
use App\Models\User;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UsersOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Giả định rằng bạn có logic để tính phần trăm thay đổi. Bạn cần thay đổi logic này tùy vào ứng dụng của mình.
        $totalUsers = User::count();
        $userGrowth = 5.2; // Tăng 5.2% so với tuần trước

        $totalQuizzes = Quiz::count();
        $quizGrowth = -2.4; // Giảm 2.4% so với tuần trước

        $totalQuizAttempts = QuizAttempt::count();
        $attemptGrowth = 3.7; // Tăng 3.7% so với tuần trước

        $totalQuestions = Question::count();
        $questionGrowth = 1.1; // Tăng 1.1% so với tuần trước

        return [
            Card::make('Tổng Số Người Dùng', $totalUsers)
                ->description('Tăng ' . $userGrowth . '% so với tuần trước')
                    ->descriptionIcon($userGrowth > 0 ? 'heroicon-s-arrow-trending-up' : 'heroicon-s-arrow-trending-down')
                ->color($userGrowth > 0 ? 'success' : 'danger'),

            Card::make('Tổng Số Bài Thi', $totalQuizzes)
                ->description(($quizGrowth > 0 ? 'Tăng ' : 'Giảm ') . abs($quizGrowth) . '% so với tuần trước')
                ->descriptionIcon($quizGrowth > 0 ? 'heroicon-s-arrow-trending-up' : 'heroicon-s-arrow-trending-down')
                ->color($quizGrowth > 0 ? 'success' : 'danger'),

            Card::make('Tổng Số Lần Làm Bài', $totalQuizAttempts)
                ->description('Tăng ' . $attemptGrowth . '% so với tuần trước')
                ->descriptionIcon($attemptGrowth > 0 ? 'heroicon-s-arrow-trending-up' : 'heroicon-s-arrow-trending-down')
                ->color($attemptGrowth > 0 ? 'success' : 'danger'),

            Card::make('Tổng Số Câu Hỏi', $totalQuestions)
                ->description('Tăng ' . $questionGrowth . '% so với tuần trước')
                ->descriptionIcon($questionGrowth > 0 ? 'heroicon-s-arrow-trending-up' : 'heroicon-s-arrow-trending-down')
                ->color($questionGrowth > 0 ? 'success' : 'danger'),
        ];
    }
}
