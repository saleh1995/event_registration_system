<?php

namespace App\Filament\Resources\AttendeeResource\Pages;

use App\Filament\Resources\AttendeeResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewAttendee extends ViewRecord
{
    protected static string $resource = AttendeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('attend')
                ->label(__('filament.actions.attend'))
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->visible(fn(): bool => !$this->record->is_attended)
                ->action(function (): void {
                    $this->record->update([
                        'is_attended' => true,
                        'checked_in_at' => now(),
                    ]);

                    Notification::make()
                        ->title(__('filament.notifications.attendance_marked'))
                        ->success()
                        ->send();
                })
                ->requiresConfirmation()
                ->modalHeading(__('filament.actions.confirm_attend'))
                ->modalDescription(__('filament.actions.confirm_attend_description'))
                ->modalSubmitActionLabel(__('filament.actions.confirm_attend')),
            Actions\Action::make('not_attend')
                ->label(__('filament.actions.not_attend'))
                ->icon('heroicon-o-x-circle')
                ->color('danger')
                ->visible(fn(): bool => $this->record->is_attended)
                ->action(function (): void {
                    $this->record->update([
                        'is_attended' => false,
                        'checked_in_at' => null,
                    ]);

                    Notification::make()
                        ->title(__('filament.notifications.attendance_unmarked'))
                        ->success()
                        ->send();
                })
                ->requiresConfirmation()
                ->modalHeading(__('filament.actions.confirm_not_attend'))
                ->modalDescription(__('filament.actions.confirm_not_attend_description'))
                ->modalSubmitActionLabel(__('filament.actions.confirm_not_attend')),
        ];
    }
}
