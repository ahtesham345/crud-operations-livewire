<?php

namespace App\Livewire;

use App\Models\car;
use Livewire\Component;

class AddCar extends Component
{
    public $car_name;
    public $car_brand;
    public $engine_capacity;
    public $fuel_type;

    protected $rules = [
        'car_name' => 'required|string|max:255',
        'car_brand' => 'required|string|max:255',
        'engine_capacity' => 'required|string|max:255',
        'fuel_type' => 'required|string',
    ];

    public function saveCar()
    {
        try {
            $this->validate();

            car::create([
                'car_name' => $this->car_name,
                'brand' => $this->car_brand,
                'engine_capacity' => $this->engine_capacity,
                'fuel_type' => $this->fuel_type,
            ]);


            $this->dispatch('success', ['message' => 'Car added successfully!']);

            $this->reset(['car_name', 'car_brand', 'engine_capacity', 'fuel_type']);
        }

        catch (\Throwable $exception) {
            $this->dispatch('error', ['message' => 'Error adding car: ' . $exception->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.add-car');
    }
}
