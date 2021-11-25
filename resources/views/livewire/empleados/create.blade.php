<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="firstName"></label>
                <input wire:model="firstName" type="text" class="form-control" id="firstName" placeholder="Firstname">@error('firstName') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="lastName"></label>
                <input wire:model="lastName" type="text" class="form-control" id="lastName" placeholder="Lastname">@error('lastName') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="condicion"></label>

                <select wire:model="condicion" class="form-control" id="condicion">
                    <option>Activo</option>
                    <option>Inactivo</option>

                </select>


                    @error('condicion')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror

            </div>
            <div class="form-group">
                <label for="telefono"></label>
                <input wire:model="telefono" type="text" class="form-control" id="telefono" placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="direccion"></label>
                <input wire:model="direccion" type="text" class="form-control" id="direccion" placeholder="Direccion">@error('direccion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="piso"></label>
                <input wire:model="piso" type="text" class="form-control" id="piso" placeholder="Piso">@error('piso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="apartamento"></label>
                <input wire:model="apartamento" type="text" class="form-control" id="apartamento" placeholder="Apartamento">@error('apartamento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ciudad"></label>
                <input wire:model="ciudad" type="text" class="form-control" id="ciudad" placeholder="Ciudad">@error('ciudad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="zipCode"></label>
                <input wire:model="zipCode" type="text" class="form-control" id="zipCode" placeholder="Zipcode">@error('zipCode') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
