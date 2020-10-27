@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Events</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Enrollments</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $events as $event)
                                <tr>
                                    <td>
                                        {{ $event->title }}
                                    </td>
                                    <td>
                                        @php($count = 0)
                                        @foreach($enroll as $e)
                                            @if($e->event_id == $event->id)
                                                @php($count += 1)
                                            @endif
                                        @endforeach
                                        {{$count}}

                                    </td>
                                    <td>
                                        {{ $event->type }}
                                    </td>
                                    <td>
                                        <a href="{{ route('events.show', [$event] ) }}" class="btn btn-secondary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
