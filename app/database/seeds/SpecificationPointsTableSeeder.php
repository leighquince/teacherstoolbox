<?php

class SpecificationPointsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('specificationPoints')->delete();

        SpecificationPoint::create(array(
            'unit_id' => 1,
            'description' => 'must be able to describe data information and knowledge',
            'parent_id' => 0,
            'order' => 1
            
        ));
        
        
    }
}