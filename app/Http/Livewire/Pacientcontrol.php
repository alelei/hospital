<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pacient;



class Pacientcontrol extends Component
{
    public $name, $surname, $age, $sex, $telephone, $address,$blood_type,$diagnostic,$email;
    protected $rules = [
        'name' => 'required',        
        'surname'=>'required',
        'age'=>'required',
        'sex'=>'required',
        'telephone'=>'required',
        'address'=>'required',
        'blood_type'=>'required',
        'diagnostic'=>'required',
        'email'=>'required',

    ];
    public $accion = "store";
    public function render()
    {
        $pacient=Pacient::all();
        return view('livewire.pacientcontrol',compact('pacient'));

    }
    public function store()
    {
        $this->validate();
        Pacient::create([
            'name'=> $this->name,
            'surname'=> $this->surname,
            'age'=> $this->age,
            'sex'=> $this->sex,
            'telephone'=> $this->telephone,
            'address'=> $this->address,
            'blood_type'=> $this->blood_type,
            'diagnostic'=> $this->diagnostic,
            'email'=> $this->email,

            
        ]);

        $this->reset(['name','surname','age','sex','telephone','address','blood_type','diagnostic','email',]);
    }
    public function edit(Pacient $pacient)
    {
        $this->name = $pacient->name;
        $this->surname= $pacient->surname;
        $this->age= $pacient->age;
        $this->sex= $pacient->sex;
        $this->telephone= $pacient->telephone;
        $this->address= $pacient->address;
        $this->blood_type= $pacient->blood_type;
        $this->diagnostic= $pacient->diagnostic;
        $this->email= $pacient->email;
        $this->accion = "update";
    }
    public function update()
    {
        $this->validate();  //revisar
        $pacient = Pacient::find($this->name);
        $pacient->update([
            'name'=> $this->name,
            'surname'=> $this->surname,
            'age'=> $this->age,
            'sex'=> $this->sex,
            'telephone'=> $this->telephone,
            'address'=> $this->address,
            'blood_type'=> $this->blood_type,
            'diagnostic'=> $this->diagnostic,
            'email'=> $this->email,
        ]);
        $this->reset(['name', 'surname','age','sex','telephone','address','blood_type','diagnostic','email']);

    }
    public function
    default()
    {
        $this->reset(['name', 'surname','age','sex','telephone','address','blood_type','diagnostic','email']);

    }
    public function destroy(Pacient $pacient)
    {
        $pacient->delete();
    }
}
