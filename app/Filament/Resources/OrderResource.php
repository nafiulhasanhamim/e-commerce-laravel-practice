<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';

    protected static ?string $navigationLabel = 'Orders';

    protected static ?string $navigationGroup = 'Order';

    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
            return static::getModel()::count();
    }
    
    // public static function getNavigationBadgeColor(): ?string
    // {
    //     return static::getModel()::count() > 15
    //         ? 'primary'
    //         : 'primary';
    // }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::where('status', '=', 'pending')->count() > 10
            ? 'warning'
            : 'Amber';
    }

//     public static function getNavigationBadgeColor(): ?string
// {
//     return static::getModel()::count() > 10 ? 'warning' : 'Amber';
// }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->label('Order Id')
                    ->disabledOn('edit'),

            Forms\Components\Fieldset::make('Users Info')
               ->relationship('user')
                   ->schema([
                       Forms\Components\TextInput::make('name')
                           ->disabledOn('edit'),
                       Forms\Components\TextInput::make('email')
                             ->disabledOn('edit')
                ]),


                Forms\Components\TextInput::make('total')
                      ->disabledOn('edit'),
                Forms\Components\TextInput::make('shipping')
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('payment_gateway')
                       ->disabledOn('edit'),
                Forms\Components\Select::make('status')
                        ->options([
                             'pending'=> 'pending',
                              'processing'=>'processing',
                              'delivered'=>'delivered'
                                ])->required()
                            // ])->columns(2)
                        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

               Tables\Columns\TextColumn::make('id')
                    ->label("Order_ID")
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('user.email')
                    ->label("User_Email")
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('total')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                    
                Tables\Columns\TextColumn::make('shipping')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                    

                Tables\Columns\TextColumn::make('payment_gateway')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->label('Order Date')
                    ->toggleable()
                    ->sortable(),


                Tables\Columns\TextColumn::make('status')
                     ->badge()
                     ->color(function (string $state) : string {
                        if($state=='pending') return 'danger';  return 'gray';
                     })
                     ->searchable()
                    ->sortable()
                    ->toggleable(),


            ])
            ->filters([
                 Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Pending' => 'Pending',
                         'delivered' => 'delivered',
    ])

            ])
            ->actions([
        
                 Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ])
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
            OrderItemsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
