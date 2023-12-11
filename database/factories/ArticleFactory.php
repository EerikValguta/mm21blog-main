<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = fake()->dateTimeBetween('-5 years', 'now');
        $updated = fake()->dateTimeBetween($created, 'now');
        $deleted = null;
        if(rand(0,9) !== 0){
            $updated = $created;
        }
        if(rand(0,9) === 0){
            $deleted = fake()->dateTimeBetween($created, 'now');
        }
        $uuid = fake()->uuid;
        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraphs(3, true),
            'image' => "https://picsum.photos/seed/$uuid/640/480",
            'created_at' => $created,
            'updated_at' => $updated,
            'deleted_at' => $deleted,
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
