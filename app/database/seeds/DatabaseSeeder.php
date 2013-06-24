<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('QuestionsTableSeeder');
		$this->call('SpecificationsTableSeeder');
		$this->call('SpecificationPointsTableSeeder');
		$this->call('PapersTableSeeder');
		$this->call('UnitsTableSeeder');

		$this->call('TweetsTableSeeder');
		$this->call('QuestionsTableSeeder');
		$this->call('SpecificationpointsTableSeeder');
		$this->call('SpecificationsTableSeeder');
		$this->call('UnitsTableSeeder');
		$this->call('PapersTableSeeder');
		$this->call('QuestionsTableSeeder');
	}

}