<div>

    <table class="w-full">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Father Name</th>
            <th class="border px-4 py-2 text-left">Mother Name</th>
            <th class="border px-4 py-2 text-left">Date of Birth</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td class="border px-4 py-4">{{ $student->name }}</td>
            <td class="border px-4 py-4">{{ $student->father }}</td>
            <td class="border px-4 py-4">{{ $student->mother }}</td>
            <td class="border px-4 py-4">{{ $student->dob }}</td>

            <td class="border px-4 py-4 text-center">
                <div class="flex items-center justify-center">
                    <a href="{{ route('student.edit', $student->id) }}"> @include('components.icons.edit')</a>
                    {{-- <a class="px-2" href=""> @include('components.icons.eye')</a> --}}
                     <form onsubmit="return confirm('Do you want to delete?')"
                        wire:submit.prevent="studentDelete({{$student->id }})">
                        <button type="submit">@include('components.icons.trash')</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="mt-4">
        {{ $students->links() }}
    </div>

</div>
