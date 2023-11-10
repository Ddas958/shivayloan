<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use Illuminate\Support\Facades\Hash;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // City::truncate();
           $cities = [
            [
              'name' => 'Ahmedabad',
            ],
            [
              'name' => 'Hyderabad',
            ],
            [
              'name' => 'Lucknow',
            ],
            [
              'name' => 'Vapi',
            ],
            [
              'name' => 'Udvada',
            ],
            [
              'name' => 'Mumbai',
            ],
            [
              'name' => 'Bangalore',
            ],
            [
              'name' => 'Kolkata',
            ],
            [
              'name' => 'Pune',
            ],
            [
              'name' => 'Valsad',
            ],
            [
              'name' => 'Diu',
            ],
            [
              'name' => 'Kevadiya',
            ],
            [
              'name' => 'Jodhpur',
            ],
            [
              'name' => 'Nashik',
            ],
            [
              'name' => 'Delhi',
            ],
            [
              'name' => 'Silvassa',
            ],
            [
              'name' => 'Umbergaon',
            ],
            [
              'name' => 'Gujarat',
            ],
            [
              'name' => 'Varanasi',
            ],
            [
              'name' => 'Jaipur',
            ],
            [
              'name' => 'Daman',
            ],
            [
              'name' => 'Vadodara',
            ],
            [
              'name' => 'Nagpur',
            ],
            [
              'name' => 'Bhopal',
            ],
            [
              'name' => 'Mangalore',
            ],
            [
              'name' => 'Hazira',
            ],
            [
              'name' => 'Saputara',
            ],
            [
              'name' => 'Surat',
            ],
            [
              'name' => 'Indore',
            ],
            [
              'name' => 'Raipur',
            ],
            [
              'name' => 'Bharuch',
            ],
            [
              'name' => 'Vikramgad',
            ],
            
          ];
          
          foreach($cities as $city)
          {
              City::create([
               'name' => $city['name'],
             ]);
           }
    }
}
