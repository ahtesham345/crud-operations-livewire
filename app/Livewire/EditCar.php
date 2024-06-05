<?php

namespace App\Livewire;

use App\Models\car;
use Livewire\Component;

class EditCar extends Component
{
    public $car;
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

    public function mount($id)
    {
        $this->car = car::findOrFail($id);
        $this->car_name = $this->car->car_name;
        $this->car_brand = $this->car->brand;
        $this->engine_capacity = $this->car->engine_capacity;
        $this->fuel_type = $this->car->fuel_type;
    }

    public function updateCar()
    {
        try{

            $this->validate();

            $this->car->update([
                'car_name' => $this->car_name,
                'brand' => $this->car_brand,
                'engine_capacity' => $this->engine_capacity,
                'fuel_type' => $this->fuel_type,
            ]);

            // session()->flash('message', 'Car details updated successfully!');

            $this->dispatch('success', ['message' => 'Car updated successfully!']);

         return redirect()->route('all_cars');
        }
        catch (\Throwable $exception) {
            $this->dispatch('error', ['message' => 'Error adding car: ' . $exception->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.edit-car', ['car' => $this->car]);
    }
}
