<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TequilaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Marca = ['Jose Cuervo,', 'Patron', 'Don Julio', 'Herradura', '1800', 'Sauza', 'Casa Noble'];       
        $tipos = ['Blanco o Plata', 'Añejo', 'Extra Añejo', 'Reposado'];
        return [
            'Marca' =>Arr::random($Marca),
            'Tipo' =>Arr::random($tipos),
            'Precio' =>random_int(500,1400),
        ];
    }
}
