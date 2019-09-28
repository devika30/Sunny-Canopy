<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'no_of_beds' => '1',
                'type_of_room' =>('single'),
            ],
            [
                'no_of_beds' => '2',
                'type_of_room' =>('double'),
            ],
            [
                'no_of_beds' => '3',
                'type_of_room' =>('triple'),
            ],
            [
                'no_of_beds' => '4',
                'type_of_room' =>('Deluxe'),
            ]

        ]);
        
    }
}
