<?php

namespace Database\Factories;

use App\Models\KennisbankItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class KennisbankItemFactory extends Factory
{
    protected $model = KennisbankItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Voeg hier de velden toe die in je migratie staan:
            'title' => fake()->words(7, true),
            'content' => fake()->paragraphs(3, true),
        ];
    }

}
