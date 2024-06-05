<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Car Crud Operations</h2>
                </div>
                <div class="col">
                    <a href="{{ route('add_car') }}" wire:navigate class="btn btn-success btn-sm float-end">Add New Car</a>
                </div>
            </div>
            <div class="row">


                <div class="col-md-12 text-right mb-1">
                    <form wire:submit="search">
                        </form>
                        <input type="text" wire:model.live="query" class="form-control" placeholder="Search">

                </div>
            </div>

        </div>
        <div class="card-body">


            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Car Name</th>
                        <th>Brand</th>
                        <th>Engine Capacity</th>
                        <th>Fuel Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                    <tr wire:key="item-{{ $car->id }}">
                        <td>{{ $car->car_name }}</td>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->engine_capacity }}</td>
                        <td>{{ $car->fuel_type }}</td>
                        <td>
                            <a href="{{ route('edit_car', $car->id) }}" wire:navigate class="btn btn-primary">Edit</a>
                            <!-- <button class="btn btn-danger" wire:click="deleteCar({{ $car->id }})">Delete</button> -->
                            <button class="btn btn-danger" wire:click.prevent="deleteCar({{$car->id}})">Delete</button>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    {{ $cars->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
