<?php

namespace App\Filament\Widgets;

use App\Models\Attendee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AttendeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $total = Attendee::count();
        $attended = Attendee::where('is_attended', true)->count();
        $absent = $total - $attended;

        return [
            Card::make(__('filament.stats.total'), $total),
            Card::make(__('filament.stats.attended'), $attended),
            Card::make(__('filament.stats.absent'), $absent),
        ];
    }
}
