<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Department;
use App\Models\District;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creara 8 departamentos con sus ciudades y distritos y los almacenará en una variable llamada department
        Department::factory(8)->create()->each(function(Department $department){
            City::factory(8)->create([
                'department_id' => $department->id

            ])->each(function (City $city){
                District::factory(8)->create([
                    'city_id' => $city->id
                ]);
            });
        });
    }
}
