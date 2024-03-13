{{-- 
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
--}}
@extends('master')

@section('content')
    <div class="container mt-4">
        @if ($events->isEmpty())
            <div class="alert alert-info" role="alert">
                No events found.
            </div>
        @else
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Event Name</th>
                        <th>Location</th>
                        <th>Date and Time</th>
                        <th>Description</th>
                        <th>Name and Contact</th>
                      
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

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection