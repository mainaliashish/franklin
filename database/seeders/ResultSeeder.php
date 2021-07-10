<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = Result::create([
            'number_of_visas_lodged'    => 5,
            'number_of_students_enrolled'   => 5,
            'number_of_partner_universities'    => 5,
            'years_of_excellence'   => 5,
            'number_of_teams'   => 5,
            'number_of_countries'   => 5,
            'meta_title' => 'Franklin Education Consultancy',
            'meta_description' => 'Franklin Education Consultancy Description',
            'meta_tags' => 'Franklin, Education, Consultancy, Description',
        ]);
    }
}
