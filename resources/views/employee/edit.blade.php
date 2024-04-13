extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                {{-- Dan Seterusnya --}}
            </div>
        </form>
    </div>
@endsection
