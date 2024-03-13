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
                    <div class="container">

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
                    
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                            Create Event
                        </button>
                        <br>
                      
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ url('/organizer/create_event') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="eventname" class="form-label">Event Name:</label>
                                                <input type="text" class="form-control" name="eventname" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="datetime" class="form-label">Event Date and Time:</label>
                                                <input type="datetime-local" class="form-control" name="date" required>
                                            </div>


                                            <div class="mb-3">
                                                <label for="location" class="form-label">Event Location:</label>
                                                <input type="text" class="form-control" name="location" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="description" class="form-label">Event Description:</label>
                                                <textarea class="form-control" name="description" rows="3" required></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="contact" class="form-label">Name and Contact Number:</label>
                                                <input type="text" class="form-control" name="contact" required>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline-primary">Create Event</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>

                        @if ($events->isEmpty())
                            <p>No events found .</p>
                        @else
                        <br>
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Event Name</th>
                                        <th>Location</th>
                                        <th>Date and Time</th>
                                        <th>Description</th>
                                        <th>Name and Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ $event->eventname }}</td>
                                            <td>{{ $event->location }}</td>
                                            <td>{{ $event->date }}</td>
                                            <td>{{ $event->description }}</td>
                                            <td>{{ $event->contact }}</td>
                                            <td>
                                                @if ($event->user_id === Auth::id())
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('organizer.edit_event', ['id' => $event->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                                        &nbsp;
                                                        <a href="{{ route('organizer.delete', ['id' => $event->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                @endif
                                            </td>                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
