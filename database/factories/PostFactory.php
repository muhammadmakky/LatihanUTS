<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(mt_rand(3, 8));
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'category_id' => 1, 
            'writer_id' => 1, 
        ];
    }
}