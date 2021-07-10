<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ResultSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(StudyAbroadSeeder::class);
        $this->call(TestPreparationSeeder::class);
    }
}
