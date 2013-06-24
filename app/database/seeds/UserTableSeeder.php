<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'leighquince@quincewebdesign.com',
            'password' => Hash::make('Something1')
        ));
        
        User::create(array(
            'email' => 'fiona.robertson@riddlesdown.org',
            'password' => Hash::make('Something1')
        ));
        
         User::create(array(
            'email' => 'nicholas.foney@riddlesdown.org',
            'password' => Hash::make('Something1')
        ));

    }
}
