<?php

namespace App\Filament\Tables;

use App\Models\Subscription;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SubscriptionTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Subscription::query())
            ->columns([
                TextColumn::make('user.name')
                    ->searchable(),

                TextColumn::make('plan.name')
                    ->searchable(),

                TextColumn::make('status')
                    ->searchable(),

                TextColumn::make('starts_at')
                    ->date()
                    ->sortable(),

                TextColumn::make('ends_at')
                    ->date()
                    ->sortable(),

                TextColumn::make('cancelled_at')
                    ->date()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
