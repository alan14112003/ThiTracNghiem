<x-filament-panels::page>
    <div>
        <h1>{{ $record->quiz->title }}</h1>
        <video controls src="{{ asset($record->video_url) }}">
            Your browser does not support the video tag.
        </video>
    </div>

</x-filament-panels::page>
