<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student') }}
        </h2>
        <div class="flex items-center">
            <a class="sms-btn mr-4" href="{{ route('student.index') }}">Student List</a>
            <a class="sms-btn" href="{{ route('student.create') }}">Add new student</a>
        </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                   @livewire('student-create')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
