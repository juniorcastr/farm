<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CultivoResource\Pages;
use App\Filament\Resources\CultivoResource\RelationManagers;
use App\Models\Cultivo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CultivoResource extends Resource
{
    protected static ?string $model = Cultivo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('tipo')
                    ->maxLength(191),
                Forms\Components\TextInput::make('area_plantada')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('data_plantio'),
                Forms\Components\DatePicker::make('data_colheita_estimada'),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(191)
                    ->default('planejado'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('area_plantada')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('data_plantio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('data_colheita_estimada')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListCultivos::route('/'),
            'create' => Pages\CreateCultivo::route('/create'),
            'edit' => Pages\EditCultivo::route('/{record}/edit'),
        ];
    }
}
