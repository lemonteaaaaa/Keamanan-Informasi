<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::first0Create([
            'name' =>'Toyota agya',
            'model' =>'123',
            'tahun' =>'2025'
            'warna' =>'putih'
            'price' => 10
        

        ]);
    }
}
