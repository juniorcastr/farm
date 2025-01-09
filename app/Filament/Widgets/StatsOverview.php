<?php

namespace App\Filament\Widgets;

use App\Models\Cliente;
use App\Models\Produto;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de Clientes', Cliente::count())
//                ->description('Total de clientes')
//                ->descriptionIcon('heroicon-s-chart-bar-chart')
                ->color('success'),

            Stat::make('Total de Produtos', Produto::count())
//                ->description('Total de produtos')
//                ->descriptionIcon('heroicon-s-square-chart')
                ->color('danger')
        ];
    }
}
