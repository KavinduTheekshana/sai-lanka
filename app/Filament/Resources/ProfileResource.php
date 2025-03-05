<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Profiles';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Section::make('Profile Details')
                ->schema([
                    TextInput::make('profile_name')->required(),
                    TextInput::make('email')->email()->unique(ignoreRecord: true),
                    TextInput::make('country'),
                    TextInput::make('city'),
                    TextInput::make('occupation'),
                    TextInput::make('status'),
                    TextInput::make('birthplace'),
                    TextInput::make('job_title'),
                    TextInput::make('job_year_started')->numeric(),
                    TextInput::make('job_year_end')->numeric(),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('profile_name')
                    ->label('Name')
                    ->sortable()
                    ->searchable()
                    ->toggleable(), // Allows users to show/hide this column

                TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('country')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('city')
                    ->toggleable(),

                TextColumn::make('occupation')
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->date()
                    ->toggleable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), // View button to see full details
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('country')->label('Country')->options(
                    Profile::pluck('country', 'country')->unique()->toArray()
                ),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
class ViewProfile extends ViewRecord
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return []; // No edit buttons, just view-only
    }
}
