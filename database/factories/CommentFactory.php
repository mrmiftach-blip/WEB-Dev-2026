<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'author' => $this->faker->name(),
            'content' => $this->faker->paragraph(rand(1, 3)),
            'created_at' => $this->faker->dateTimeBetween('-3 months', 'now'),
            'updated_at' => null,
            'updated_at_display' => null,
        ];
    }
}
