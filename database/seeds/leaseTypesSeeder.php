<?php

use Illuminate\Database\Seeder;

class leaseTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('lease_types')->insert([
            ['type' => 'maandelijks'],
            ['type' => 'periodiek']
        ]);
    }
}
