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
                    <h2>Event List</h2>
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

                    @if ($events->isEmpty())
                        <p>No events found .</p>
                    @else
                        <table class="table table-hover">
                            <thead class="table-dark">

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
                                        <td>{{ $event->contact}}</td>
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
