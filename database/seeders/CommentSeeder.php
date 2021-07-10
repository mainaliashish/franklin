<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment_1 = Comment::create([
            'name' => 'Ashish Mainali',
            'email' => 'ashish@test.com',
            'is_featured' => 1,
            'blog_id'=> 1,
            'is_published' => 1,
            'comment' => 'Dolor duis cupidatat ut cupidatat exercitation fugiat consequat irure pariatur eiusmod sunt exercitation ipsum cillum. Veniam do mollit adipisicing do duis nisi. Culpa eu mollit elit excepteur id excepteur enim voluptate consequat.'
        ]);
        
        $comment_2 = Comment::create([
            'name' => 'Ram Lama',
            'email' => 'ram@test.com',
            'is_featured' => 1,
            'blog_id'=> 1,
            'is_published' => 1,
            'comment' => 'Dolor duis cupidatat ut cupidatat exercitation fugiat consequat irure pariatur eiusmod sunt exercitation ipsum cillum. Veniam do mollit adipisicing do duis nisi. Culpa eu mollit elit excepteur id excepteur enim voluptate consequat.'
        ]);
        $comment_3 = Comment::create([
            'name' => 'Hari Thapa',
            'email' => 'hari@test.com',
            'is_featured' => 1,
            'blog_id'=> 1,
            'is_published' => 1,
            'comment' => 'Dolor duis cupidatat ut cupidatat exercitation fugiat consequat irure pariatur eiusmod sunt exercitation ipsum cillum. Veniam do mollit adipisicing do duis nisi. Culpa eu mollit elit excepteur id excepteur enim voluptate consequat.'
        ]);
        $comment_4 = Comment::create([
            'name' => 'Shyam Thapa',
            'email' => 'Shyam@test.com',
            'is_featured' => 1,
            'blog_id'=> 1,
            'is_published' => 1,
            'comment' => 'Dolor duis cupidatat ut cupidatat exercitation fugiat consequat irure pariatur eiusmod sunt exercitation ipsum cillum. Veniam do mollit adipisicing do duis nisi. Culpa eu mollit elit excepteur id excepteur enim voluptate consequat.'
        ]);
    }
}
