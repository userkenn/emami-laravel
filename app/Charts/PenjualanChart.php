<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class PenjualanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        // Fetch data from the database
        $produk = Auth::user()->produk;

        // Extract relevant data for the chart
        $data = $produk->pluck('produk_terjual')->toArray();
        $labels = $produk->pluck('nama_produk')->toArray();

        return $this->chart->pieChart()
            ->setTitle('Data Penjualan Produk')
            ->setSubtitle('Banyaknya Produk yang Terjual')
            
            ->addData($data)
            ->setLabels($labels);
    }
}
