<?php

namespace App\Filament\Exports;

use App\Models\Attendee;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class AttendeeExporter extends Exporter
{
    protected static ?string $model = Attendee::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('name')
                ->label(__('filament.attendee.name')),
            ExportColumn::make('email')
                ->label(__('filament.attendee.email')),
            ExportColumn::make('phone')
                ->label(__('filament.attendee.phone')),
            // ExportColumn::make('qr_code')
            //     ->label(__('filament.attendee.qr_code')),
            ExportColumn::make('is_attended')
                ->label(__('filament.attendee.is_attended')),
            ExportColumn::make('checked_in_at')
                ->label(__('filament.attendee.checked_in_at')),
            ExportColumn::make('created_at')
                ->label(__('filament.created_at')),
            ExportColumn::make('updated_at')
                ->label(__('filament.updated_at')),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $successfulRows = number_format($export->successful_rows);
        $failedRowsCount = $export->getFailedRowsCount();
        $failedRowsText = $failedRowsCount ? (' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' ' . __('filament.export.failed_to_export')) : '';

        return __('filament.export.completed', [
            'count' => $successfulRows,
            'rows' => str('row')->plural($export->successful_rows),
        ]) . $failedRowsText;
    }
}
