<?php

class PapersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('papers')->delete();

        Paper::create(array(
            'year' => 2010,
            'month' => 'Jan',
            'unit_id' => 1
            
        ));
        
        
    }
}