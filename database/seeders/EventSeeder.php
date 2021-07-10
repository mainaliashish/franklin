<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_1 = Event::create([
            'title' => 'Welcome to education fair',
            'slug' => Str::slug('Welcome to education fair'),
            'description' => 'Aliqua aliquip ad deserunt labore elit exercitation consequat eu cupidatat incididunt aliqua consequat. Quis veniam do magna do dolore duis do ipsum sint eiusmod. Laboris nostrud ut et enim id. Officia eiusmod ut occaecat aliqua. In ex cupidatat non anim quis reprehenderit et officia tempor est. Dolor sit aute do aliqua fugiat est deserunt deserunt ex proident aliquip esse ad labore.',
            'image' => '',
            'event_date' => Carbon::create('2000', '01', '01'),
            'is_featured' => 1,
            'meta_title' => 'Franklin Education Consultancy',
            'meta_description' => 'Franklin Education Consultancy Description',
            'meta_tags' => 'Franklin, Education, Consultancy, Description',
        ]);

        $event_2 = Event::create([
            'title' => 'Welcome to our office',
            'slug' => Str::slug('Welcome to our office'),
            'description' => 'Aliqua aliquip ad deserunt labore elit exercitation consequat eu cupidatat incididunt aliqua consequat. Quis veniam do magna do dolore duis do ipsum sint eiusmod. Laboris nostrud ut et enim id. Officia eiusmod ut occaecat aliqua. In ex cupidatat non anim quis reprehenderit et officia tempor est. Dolor sit aute do aliqua fugiat est deserunt deserunt ex proident aliquip esse ad labore.',
            'image' => '',
            'event_date' => Carbon::create('2000', '01', '01'),
            'is_featured' => 1,
            'meta_title' => 'Franklin Education Consultancy',
            'meta_description' => 'Franklin Education Consultancy Description',
            'meta_tags' => 'Franklin, Education, Consultancy, Description',
        ]);
    }
}
