{{-- 
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
--}}
@extends('organizer.organizer-master')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <br>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
    
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                    <form method="POST" action="{{ url('/organizer/edit_event/'.$userinfo->id) }}">
                        @csrf
                      

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$userinfo->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age:</label>
                            <input type="text" class="form-control" name="age" value="{{$userinfo->age}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <input type="text" class="form-control" name="address" value="{{ $event->address }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">gender:</label>
                            <textarea class="form-control" name="gender" rows="3" required>{{$userinfo->gender }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">phonenum</label>
                            <input type="text" class="form-control" name="phonenum" value="{{ $userinfo->phonenum}}" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button> &nbsp;
                            <button type="update" class="btn btn-outline-primary">Create Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
