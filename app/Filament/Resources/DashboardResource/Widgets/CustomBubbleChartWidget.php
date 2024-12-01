<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use Filament\Widgets\ChartWidget;

class CustomBubbleChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Biểu Đồ Bọt';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Số Lần Làm Bài',
                    'data' => [
                        ['x' => 10, 'y' => 20, 'r' => 5],   // Dữ liệu 1
                        ['x' => 15, 'y' => 25, 'r' => 10],  // Dữ liệu 2
                        ['x' => 20, 'y' => 30, 'r' => 15],  // Dữ liệu 3
                        ['x' => 25, 'y' => 20, 'r' => 20],  // Dữ liệu 4
                        ['x' => 30, 'y' => 40, 'r' => 25],  // Dữ liệu 5
                        ['x' => 35, 'y' => 15, 'r' => 30],  // Dữ liệu 6
                        ['x' => 40, 'y' => 35, 'r' => 35],  // Dữ liệu 7
                        ['x' => 45, 'y' => 10, 'r' => 40],  // Dữ liệu 8
                        ['x' => 50, 'y' => 30, 'r' => 45],  // Dữ liệu 9
                        ['x' => 55, 'y' => 50, 'r' => 50],  // Dữ liệu 10
                    ],
                    'backgroundColor' => 'rgb(255, 99, 132)', // Màu sắc bọt
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bubble'; // Trả về loại biểu đồ bọt
    }
}
