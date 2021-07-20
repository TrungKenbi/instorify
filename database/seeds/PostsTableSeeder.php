<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];

        $posts[] = [
            'user_id' => '2',
            'content' => "Hôm nay trời nhẹ lên cao cao quá cao",
        ];

        foreach ($posts as $post)
            Post::create($post);
    }
}
