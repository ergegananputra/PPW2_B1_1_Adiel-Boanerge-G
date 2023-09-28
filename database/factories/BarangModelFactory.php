<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangModel>
 */
class BarangModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_barang" => $this->faker->word,
            "harga" => $this->faker->randomNumber(5),
            "stok" => $this->faker->randomNumber(2),
            "id_suplier" => $this->faker->randomNumber(1),
        ];
    }
}
