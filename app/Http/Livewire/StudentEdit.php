<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentEdit extends Component {

 public $student_id;
 public $name;
 public $father;
 public $mother;
 public $dob;

 public function mount() {
  $student          = Student::findOrFail( $this->student_id );
  $this->student_id = $student->id;
  $this->name       = $student->name;
  $this->father     = $student->father;
  $this->mother     = $student->mother;
  $this->dob        = $student->dob;

 }
 public function render() {
  $student = Student::findOrFail( $this->student_id );
  return view( 'livewire.student-edit', [
   'student' => $student,
  ] );
 }
 protected $rules = [
  'name'   => 'required',
  'father' => 'required',
  'mother' => 'required',
  'dob'    => 'date',
 ];

 public function submitForm() {
  sleep( 5 );
  $student = Student::findOrFail( $this->student_id );

  $this->validate();

  $student->name   = $this->name;
  $student->father = $this->father;
  $student->mother = $this->mother;
  $student->dob    = $this->dob;
  $student->save();
  flash()->addSuccess( "Student Successfully Updated." );

  return redirect()->route( 'student.index' );
 }

}
