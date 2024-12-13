<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Tables\Columns\RelationColumn;
// use Illuminate\Support\Facades\DB;


class ProductResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Products';

    protected static ?string $navigationGroup = 'Shop';

    protected static ?int $navigationSort = 0;

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 10;

    public static function getNavigationBadge(): ?string
    {
            return static::getModel()::count();
    }

    // public static function getNavigationBadgeColor(): ?string
    // {
    //     return static::getModel()::count() > 15
    //         ? 'warning'
    //         : 'primary';
    // }

    
     public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'qty','mrp', 'saleprice', 'description', 'brand.name'];
    }


    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'quantity' => $record->qty,
            'mrp' => $record->mrp,
            'Brand' => $record->brand->name,
        ];
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\TextInput::make('qty'),
                        Forms\Components\TextInput::make('description')
                         ->columnSpan('full')

                        
                    ])->columns(2)
                ])


                // Forms\Components\Group::make()
                //     ->schema([
                //         Forms\Components\Section::make()
                //             ->schema([
                //                 Forms\Components\TextInput::make('name')
                //                     ->required()
                //                     ->live(onBlur: true)
                //                     ->afterStateUpdated(function(string $operation, $state, Forms\Set $set) {
                //                         if ($operation !== 'create') {
                //                             return;
                //                         }

                //                         $set('slug', Str::slug($state));
                //                     }),

                //                      Forms\Components\TextInput::make('slug')
                //                     ->disabled()
                //                     ->dehydrated()
                //                     ->required()
                //                     ->unique(Product::class, 'slug', ignoreRecord: true),

                //                 Forms\Components\MarkdownEditor::make('description')
                //                     ->columnSpan('full')
                //             ])->columns(2),

                //         Forms\Components\Section::make('Pricing & Inventory')
                //             ->schema([
                //                 Forms\Components\TextInput::make('sku')
                //                     ->label("SKU (Stock Keeping Unit)")
                //                     ->required(),

                //                 Forms\Components\TextInput::make('price')
                //                     ->numeric()
                //                     ->rules('regex:/^\d{1,6}(\.\d{0,2})?$/')
                //                     ->required(),

                //                                                     Forms\Components\TextInput::make('quantity')
                //                     ->numeric()
                //                     ->minValue(0)
                //                     ->maxValue(100)
                //                     ->required(),

                            //     Forms\Components\Select::make('type')
                            //         ->options([
                            //             'downloadable',
                            //             'deliverable'
                            //         ])->required()
                            // ])->columns(2),

                //                                 ]),

                // Forms\Components\Group::make()
                //     ->schema([
                //         Forms\Components\Section::make('Status')
                //             ->schema([
                //                 Forms\Components\Toggle::make('is_visible')
                //                     ->label('Visibility')
                //                     ->helperText('Enable or disable product visibility')
                //                     ->default(true),

                //                 Forms\Components\Toggle::make('is_featured')
                //                     ->label('Featured')
                //                     ->helperText('Enable or disable products featured status'),

                //                 Forms\Components\DatePicker::make('published_at')
                //                     ->label('Availability')
                //                     ->default(now())
                //             ]),

                //         Forms\Components\Section::make('Image')
                //             ->schema([
                //                 Forms\Components\FileUpload::make('image')
                //                     ->directory('form-attachments')
                //                     ->preserveFilenames()
                //                     ->image()
                //                     ->imageEditor()
                //             ])->collapsible(),

                //         Forms\Components\Section::make('Associations')
                //             ->schema([
                            //    Forms\Components\Select::make('brand_id')
                            //         ->relationship('brand', 'name')
                            //         ->required(),

                //                 Forms\Components\Select::make('categories')
                //                     ->relationship('categories', 'name')
                //                     ->multiple()
                //                     ->required(),
                //             ]),
                //     ]),

            
                ]);
    }

    public static function table(Table $table): Table
    {

        // $categories = DB::table('products')->distinct()->pluck('category')->toArray(); 

        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                    // ->toggleable(),

                Tables\Columns\TextColumn::make('brand.name')
                    ->searchable()
                    ->sortable(),
                    // ->toggleable(),

                Tables\Columns\TextColumn::make('description')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('mrp')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('saleprice')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('qty')
                     ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('brand')
                    ->relationship('brand', 'name'),

                // Tables\Filters\SelectFilter::make('category')
                //     ->options($categories)
                    
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
