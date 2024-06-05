<div class="container ">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Car Crud Operations</h2>
                </div>
                <div class="col">
                    <a href="{{route('all_cars')}}" wire:navigate class="btn btn-primary btn-sm float-end ">Car List</a>
                </div>
            </div>

        </div>
        <div class="card-body">

    <form wire:submit.prevent="updateCar">
        <div class="row">
            <div class="form-group col-12 col-md-6 mb-4">
                <label class="text-primary">Car Name</label>
                <div class="input-group">
                    <input type="text" wire:model="car_name" value="{{$car->car_name}}" class="form-control" placeholder="Enter Car Name" >
                </div>
                @error('car_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-12 col-md-6">
                <label class="text-primary">Car Brand</label>
                <div class="input-group">
                    <input type="text" wire:model="car_brand" value="{{$car->brand}}" class="form-control" placeholder="Enter Car Brand" >
                </div>
                @error('car_brand') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-12 col-md-6">
                <label class="text-primary">Engine Capacity</label>
                <div class="input-group">
                    <input type="text" wire:model="engine_capacity" value="{{$car->engine_capacity}}" class="form-control" placeholder="Enter Engine Capacity">
                </div>
                @error('engine_capacity') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 form-group mb-3">
                <label>Fuel Type:</label>
                <select wire:model="fuel_type" class="form-control">
                    <option value="">Select Type</option>
                    <option value="Petrol"{{$car->fuel_type === 'petrol'?'selected':''}}>Petrol</option>
                    <option value="Diesel"{{$car->fuel_type === 'Diesel'?'selected':''}}>Diesel</option>
                    <option value="CNG"{{$car->fuel_type === 'CNG'?'selected':''}}>CNG</option>
                </select>
                @error('fuel_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-dark text-white">Update Car</button>
    </form>
</div>

    </div>

</div>

