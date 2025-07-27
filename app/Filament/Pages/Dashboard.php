<?php

namespace App\Filament\Pages;

use App\Filament\Exports\StatisticsExporter;
use Filament\Actions\Action;
use Filament\Actions\ExportAction;


class Dashboard extends \Filament\Pages\Dashboard
{
    protected function getHeaderActions(): array
    {
        return [
            ExportAction::make('export')
                ->label(__('filament.actions.export_excel'))
                ->exporter(StatisticsExporter::class)
                ->maxRows(1)
                ->pluralModelLabel(__('filament.statistics')),
        ];
    }
}
