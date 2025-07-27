<?php

namespace App\Filament\Exports;

use App\Models\Attendee;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Models\Export;

class StatisticsExporter extends Exporter
{
    protected static ?string $model = Attendee::class;

    public static function getColumns(): array
    {
        $total = Attendee::count();
        $attended = Attendee::where('is_attended', true)->count();
        $absent = $total - $attended;
        return [
            ExportColumn::make('total_attendee')
                ->label(__('filament.stats.total'))
                ->state(function () use ($total) {
                    return $total;
                }),
            ExportColumn::make('attended')
                ->label(__('filament.stats.attended'))
                ->state(function () use ($attended) {
                    return $attended;
                }),
            ExportColumn::make('absent')
                ->label(__('filament.stats.absent'))
                ->state(function () use ($absent) {
                    return $absent;
                }),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        return __('filament.export.success_statistics', [
            'count' => 1,
            'rows' => str(__('filament.row'))->plural($export->successful_rows),
        ]);
    }
}
