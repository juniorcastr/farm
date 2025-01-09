<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendaResource\Pages;
use App\Filament\Resources\VendaResource\RelationManagers;
use App\Models\Venda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VendaResource extends Resource
{
    protected static ?string $model = Venda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('cliente_id')
                    ->required()
                    ->relationship('cliente', 'nome'),
                Forms\Components\TextInput::make('valor_total')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('data_venda')
                    ->required()
                    ->default(now()),
                Forms\Components\TextInput::make('metodo_pagamento')
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cliente_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('valor_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('data_venda')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metodo_pagamento')
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
            'index' => Pages\ListVendas::route('/'),
            'create' => Pages\CreateVenda::route('/create'),
            'edit' => Pages\EditVenda::route('/{record}/edit'),
        ];
    }
}
