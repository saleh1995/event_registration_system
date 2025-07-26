<?php

namespace App\Filament\Widgets;

use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Filament\Widgets;


class AccountWidget extends Widgets\AccountWidget
{
    // use HasWidgetShield;
    protected int|string|array $columnSpan = 'full';

}
