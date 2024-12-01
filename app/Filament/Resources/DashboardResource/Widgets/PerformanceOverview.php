<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use Filament\Widgets\ChartWidget;

class PerformanceOverview extends ChartWidget
{
    protected static ?string $heading = 'Hiệu Suất Hệ Thống';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Bài Thi Hoàn Thành',
                    'data' => [2, 5, 7, 10, 15, 25, 35, 45, 60, 75, 80, 95],
                    'borderColor' => 'rgba(75, 192, 192, 1)', // Màu sắc đường
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)', // Màu nền
                    'fill' => true, // Đổ màu bên trong biểu đồ
                    'tension' => 0.4, // Độ cong của đường
                ],
            ],
            'labels' => ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
        ];
    }

    protected function getType(): string
    {
        return 'line'; // Loại biểu đồ
    }
}
