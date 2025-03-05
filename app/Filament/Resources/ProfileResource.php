<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Filament\Resources\ProfileResource\RelationManagers\ProfileImagesRelationManager;
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
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Profiles';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Section::make('Profile Details')
                ->schema([
                    Forms\Components\TextInput::make('profile_name')->required(),
                    Forms\Components\TextInput::make('email')->email()->unique(ignoreRecord: true),
                    Forms\Components\TextInput::make('country'),
                    Forms\Components\TextInput::make('city'),
                    Forms\Components\TextInput::make('occupation'),
                    Forms\Components\TextInput::make('status'),
                    Forms\Components\TextInput::make('birthplace'),
                    Forms\Components\TextInput::make('job_title'),
                    Forms\Components\TextInput::make('job_year_started')->numeric(),
                    Forms\Components\TextInput::make('job_year_end')->numeric(),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('profile_name')
                    ->label('Name')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

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
                Tables\Actions\ViewAction::make(),
                Action::make('viewImages')
                ->label('View Images')
                ->icon('heroicon-o-photo')
                ->modalHeading('User Images')
                ->modalContent(function ($record) {
                    $images = $record->profileImages;
                    return view('filament.tables.modals.view-images', [
                        'images' => $images,
                    ]);
                })
                ->modalWidth('4xl')
                ->modalCloseButton(false)
                ->modalActions([
                    // Add a close button
                    Action::make('close')
                        ->label('Close')
                        ->color('secondary')
                        ->close(),
                ]),
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
            ProfileImagesRelationManager::class,
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
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('profileImages');
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
