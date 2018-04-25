<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->delete();
	    DB::table('plans')->insert([
	    'activity'=>'Go for a run!',
        'duration'=>'30',
        'repeat'=>'4',
        'calories'=>'298'
        ]);
        //
        DB::table('plans')->insert([
            'activity'=>'Weight Lifting!',
            'duration'=>'60',
            'repeat'=>'4',
            'calories'=>'270'
            ]);

        DB::table('plans')->insert([
                'activity'=>'Go for a walk!',
                'duration'=>'60',
                'repeat'=>'5',
                'calories'=>'250'
                ]);
    }

}
