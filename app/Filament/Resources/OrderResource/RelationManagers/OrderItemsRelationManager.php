<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'orderItems';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('product_name')
                //     ->required()
                //     ->maxLength(255),


            Forms\Components\Fieldset::make('Product Details')
               ->relationship('product')
                   ->schema([
                       Forms\Components\TextInput::make('name')
                             ->disabledOn('edit'),
                       Forms\Components\TextInput::make('mrp')
                             ->disabledOn('edit'),
                ]),


                Forms\Components\TextInput::make('qty')
                      ->disabledOn('edit'),
                Forms\Components\Select::make('order_status')
                        ->options([
                             'pending'=> 'pending',
                              'processing'=>'processing',
                              'delivered'=>'delivered'
                                ])->required()
                            // ])->columns(2)
                        ]);
        
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('product_name')
            ->columns([
                Tables\Columns\TextColumn::make('product_name'),
                Tables\Columns\TextColumn::make('product.mrp')
                    ->label('Product Mrp Price'),
                Tables\Columns\TextColumn::make('product.brand.name')
                     ->label('Brand'),
                Tables\Columns\TextColumn::make('order_status')
                     ->label('Status'),
                 Tables\Columns\TextColumn::make('qty')
                     ->label('Quantity'),
                 Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->label('Order Date')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                 Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    // Tables\Actions\DeleteAction::make()
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
