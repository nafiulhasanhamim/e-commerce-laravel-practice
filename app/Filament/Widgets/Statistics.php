<?php

namespace App\Filament\Widgets;
use Carbon\Carbon;
use App\Models\Products;
use App\Models\Brand;
use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Statistics extends BaseWidget
{
    protected function getStats(): array
    {
      $startDate = Carbon::now()->startOfMonth();
      $endDate = Carbon::now()->endOfMonth();
      $orderDescription = "Orders from {$startDate->format('M d, Y')} to {$endDate->format('M d, Y')}";
      $revenueDescription = "Revenue from {$startDate->format('M d, Y')} to {$endDate->format('M d, Y')}";

        return [
            Stat::make('Total Brands', Brand::count())
                ->description('Total Brands')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('Amber'),
            
            Stat::make('Total Products', Products::count())
                ->description('Total products')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('Amber'),
            
            Stat::make('Total Orders', Order::count())
                ->description('Total Orders')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('Amber'),

            Stat::make('Total Pending Orders', Order::where('status', 'pending')->count())
                ->description('Total Pending Orders')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger'),

            Stat::make('Total Orders In the last Month', Order::whereBetween('created_at', [$startDate, $endDate])->count())
                ->description($orderDescription)
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('success'),

            Stat::make('Last Month Revenue', Order::where('created_at', '>=', $startDate)
            ->where('created_at', '<=', $endDate)
            ->sum('total'))
            ->description($revenueDescription)
            ->descriptionIcon('heroicon-o-currency-dollar')
            ->color('success'),
        ];
    }
}
