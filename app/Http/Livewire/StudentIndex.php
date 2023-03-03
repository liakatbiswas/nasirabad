<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component {
 use WithPagination;
 public function render() {

  $students = Student::paginate( 10 );
  return view( 'livewire.student-index', [
   'students' => $students,
  ] );
 }

 public function studentDelete( $id ) {
  $student = Student::findOrFail( $id );
  $student->delete();
  flash()->addSuccess( "Student Successfully Deleted." );
 }
}
