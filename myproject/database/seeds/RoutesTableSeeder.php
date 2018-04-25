<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('routes')->delete();
	DB::table('routes')->insert([
	'routeName'=>'The Yellow Brick Road',
    'distance'=>'5',
    'coordinate'=>'11223',
    'scenery'=>'beach',
    'difficulty'=>'5',
    'popularity'=>'7'
    ]);

    DB::table('routes')->insert([
        'routeName'=>'The Castile',
        'distance'=>'10',
        'coordinate'=>'61223',
        'scenery'=>'Mountain',
        'difficulty'=>'8',
        'popularity'=>'5'
        ]);
        //
    }
        //
    }

