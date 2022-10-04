<?php

use App\User;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user_ids = User::pluck('id')->toArray();
        for($i=0; $i<10; $i++){
            $post = new Post();
            $post->title = $faker->text(20);
            $post->user_id = Arr::random($user_ids);
            $post->content = $faker->paragraphs(2, true);
            $post->image = $faker->imageUrl(200, 200);

            $post->save();
        }
    }
}
