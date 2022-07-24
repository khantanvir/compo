<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<25;$i++){
            Vendor::create([
                'name'=>'vendor'.rand(1,99),
                'email'=>'vendor'.rand(22,999).'@vendor.com',
                'phone'=>rand(10000000,999999999),
                'role'=>'vendor',
            ]);
        }
        
    }
}
