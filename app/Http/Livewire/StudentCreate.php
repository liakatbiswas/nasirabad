<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentCreate extends Component {

 public $name;
 public $father;
 public $mother;
 public $dob;

 protected $rules = [
  'name'   => 'required',
  'father' => 'required',
  'mother' => 'required',
  'dob'    => 'date',
 ];

 public function render() {
  return view( 'livewire.student-create' );
 }

 public function submit() {
  $this->validate();

  $student = Student::create( [
   'name'   => $this->name,
   'father' => $this->father,
   'mother' => $this->mother,
   'dob'    => $this->dob,
  ] );

  flash()->addSuccess( "Student Added Successfully" );
//   return redirect()->to( 'student.index' );
  return redirect( route( 'student.index' ) );

 }

}
