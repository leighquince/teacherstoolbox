<?php

class SpecificationsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('specifications')->delete();

        Specification::create(array(
            'name' => 'AS ICT',
            'board' => 'OCR',
            'code' => 'H117',
            'level' => 'GCE'
            
        ));
        
        
    }
}