@extends('master')

{{-- 
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
--}}


@section('content')
    <div class="events bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Upcoming Chess Events in Malaysia</h2>
            <!-- Event Cards Go Here -->
            <a href="events" class="btn btn-secondary btn-lg">Explore All Events</a>
        </div>
    </div>

    <div class="container py-5">
        <div>
            <h2 class="mb-4">About CariCatur</h2>
            <p class="text-justify">The CariCatur initiative was born out of the increasing demand for a single, centralized
                platform that could
                handle chess events all around Malaysia. The increasing demand for a system that improves the overall
                experience for both players and organizers stems from the popularity of chess tournaments. Taking use of
                these chances and problems, the project recognizes the trend and leveraging a user-friendly web application.
                The initiative is a response to the current situations, in which chess events are on the rise and there is a
                growing need for efficient event management. The goals are to create a comprehensive solution that meets the
                needs of both participants and organizers. As chess grows in popularity not only as a game but also as a
                competitive and leisure activity.</p>
        </div>
    </div>
        <div class="container py-5">
        <div>
            <h2 class="mb-4">Are you organizer?</h2>
            <p class="text-justify">Please contact us at <a href="#" target="_blank">info@caricatur.com</li></p>
    </div>
@endsection
