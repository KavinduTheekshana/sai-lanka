<?php

namespace App\Filament\Resources\ProfileResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;

class ProfileImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'profileImages';

    protected static ?string $recordTitleAttribute = 'image';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->label('Image')
                ->defaultImageUrl('https://via.placeholder.com/100') // Test with a placeholder image
                ->width(100)
                ->height(100),
            ])
            ->filters([
                // Add filters if needed
            ]);
    }
}
