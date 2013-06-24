<?php

class UnitsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('units')->delete();

        Unit::create(array(
            'specification_id' => 1,
            'title' => 'Data Information and Knowledge',
            'code' => 'GO61'
            
        ));
        
        
    }
}