<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Attendee;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ExportAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Exports\AttendeeExporter;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\AttendeeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AttendeeResource\RelationManagers;

class AttendeeResource extends Resource
{
    protected static ?string $model = Attendee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('filament.attendee.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label(__('filament.attendee.email'))
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label(__('filament.attendee.phone'))
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('qr_code')
                    ->label(__('filament.attendee.qr_code'))
                    ->disk('public')
                    ->previewable()
                    ->downloadable(),
                Forms\Components\Toggle::make('is_attended')
                    ->label(__('filament.attendee.is_attended'))
                    ->required(),
                Forms\Components\DateTimePicker::make('checked_in_at')
                    ->label(__('filament.attendee.checked_in_at')),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')->label(__('filament.attendee.name')),
                TextEntry::make('email')->label(__('filament.attendee.email')),
                TextEntry::make('phone')->label(__('filament.attendee.phone')),

                ImageEntry::make('qr_code')
                    ->disk('public')
                    ->height(150)
                    ->label(__('filament.attendee.qr_code')),

                IconEntry::make('is_attended')
                    ->boolean()
                    ->label(__('filament.attendee.is_attended')),

                TextEntry::make('checked_in_at')
                    ->dateTime()
                    ->label(__('filament.attendee.checked_in_at')),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->label(__('filament.created_at')),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->label(__('filament.updated_at')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('filament.attendee.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('filament.attendee.email'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label(__('filament.attendee.phone'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('qr_code')
                    ->label(__('filament.attendee.qr_code'))
                    ->disk('public')
                    ->height(60)
                    ->width(60)
                    ->openUrlInNewTab(),
                Tables\Columns\IconColumn::make('is_attended')
                    ->label(__('filament.attendee.is_attended'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('checked_in_at')
                    ->label(__('filament.attendee.checked_in_at'))
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('filament.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('filament.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                ExportAction::make()
                    ->exporter(AttendeeExporter::class)
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttendees::route('/'),
            // 'create' => Pages\CreateAttendee::route('/create'),
            'view' => Pages\ViewAttendee::route('/{record}'),
            // 'edit' => Pages\EditAttendee::route('/{record}/edit'),
        ];
    }


    public static function getNavigationLabel(): string
    {
        return __('filament.attendee.navigation');
    }

    public static function getPluralLabel(): string
    {
        return __('filament.attendee.plural');
    }

    public static function getModelLabel(): string
    {
        return __('filament.attendee.singular');
    }
}
