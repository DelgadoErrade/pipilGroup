<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empleado;

class Empleados extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $firstName, $lastName, $condicion, $telefono, $email, $direccion, $piso, $apartamento, $ciudad, $zipCode;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.empleados.view', [
            'empleados' => Empleado::latest()
						->orWhere('firstName', 'LIKE', $keyWord)
						->orWhere('lastName', 'LIKE', $keyWord)
						->orWhere('condicion', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('direccion', 'LIKE', $keyWord)
						->orWhere('piso', 'LIKE', $keyWord)
						->orWhere('apartamento', 'LIKE', $keyWord)
						->orWhere('ciudad', 'LIKE', $keyWord)
						->orWhere('zipCode', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->firstName = null;
		$this->lastName = null;
		$this->condicion = null;
		$this->telefono = null;
		$this->email = null;
		$this->direccion = null;
		$this->piso = null;
		$this->apartamento = null;
		$this->ciudad = null;
		$this->zipCode = null;
    }

    public function store()
    {
        $this->validate([
		'firstName' => 'required',
		'lastName' => 'required',
		'condicion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'piso' => 'required',
		'apartamento' => 'required',
		'ciudad' => 'required',
		'zipCode' => 'required',
        ]);

        Empleado::create([ 
			'firstName' => $this-> firstName,
			'lastName' => $this-> lastName,
			'condicion' => $this-> condicion,
			'telefono' => $this-> telefono,
			'email' => $this-> email,
			'direccion' => $this-> direccion,
			'piso' => $this-> piso,
			'apartamento' => $this-> apartamento,
			'ciudad' => $this-> ciudad,
			'zipCode' => $this-> zipCode
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Empleado Successfully created.');
    }

    public function edit($id)
    {
        $record = Empleado::findOrFail($id);

        $this->selected_id = $id; 
		$this->firstName = $record-> firstName;
		$this->lastName = $record-> lastName;
		$this->condicion = $record-> condicion;
		$this->telefono = $record-> telefono;
		$this->email = $record-> email;
		$this->direccion = $record-> direccion;
		$this->piso = $record-> piso;
		$this->apartamento = $record-> apartamento;
		$this->ciudad = $record-> ciudad;
		$this->zipCode = $record-> zipCode;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'firstName' => 'required',
		'lastName' => 'required',
		'condicion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'piso' => 'required',
		'apartamento' => 'required',
		'ciudad' => 'required',
		'zipCode' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Empleado::find($this->selected_id);
            $record->update([ 
			'firstName' => $this-> firstName,
			'lastName' => $this-> lastName,
			'condicion' => $this-> condicion,
			'telefono' => $this-> telefono,
			'email' => $this-> email,
			'direccion' => $this-> direccion,
			'piso' => $this-> piso,
			'apartamento' => $this-> apartamento,
			'ciudad' => $this-> ciudad,
			'zipCode' => $this-> zipCode
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Empleado Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Empleado::where('id', $id);
            $record->delete();
        }
    }
}
