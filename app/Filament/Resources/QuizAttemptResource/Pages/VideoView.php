<?php

namespace App\Filament\Resources\QuizAttemptResource\Pages;

use App\Filament\Resources\QuizAttemptResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class VideoView extends Page
{
    use InteractsWithRecord;
    protected static string $resource = QuizAttemptResource::class;

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }

    protected static string $view = 'filament.resources.quiz-attempt-resource.pages.video-view';
}
