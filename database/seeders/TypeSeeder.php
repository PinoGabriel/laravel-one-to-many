<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_type = config("types");

        foreach ($array_type as $type_item) {
            $array_type = new Type();
            $array_type->fill($type_item);
            $array_type->save();
        }
    }
}
