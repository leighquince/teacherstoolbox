<?php

class QuestionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('questions')->delete();

        Question::create(array(
            'question_no' => '1',
            'question' => 'Describe the difference between information and knowledge',
            'keyword' => 'describe',
            'marks' => 4,
            'specification_point_id' => 1,
            'paper_id' => 1,
            'user_id' => 1,
            'status' => 'pastPaper'
            
        ));
        
        
    }
}