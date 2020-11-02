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
                                <th>Id</th>
                                <th>Title</th>
                                <th>Enrollments</th>
{{--                                <th>Type</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $events as $event)
                                <tr>
                                    <td>
                                        {{ $event->id }}
                                    </td>
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
                                        <a href="{{ route('events.enrollments', [$event] ) }}" class="card-link">{{$count}}</a>

                                    </td>
{{--                                    <td>--}}
{{--                                        {{ $event->type }}--}}
{{--                                    </td>--}}
                                    <td>
                                        <a href="{{ route('events.show', [$event] ) }}" class="btn btn-secondary">View</a>
                                        <a href="{{ route('events.edit', [$event] ) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{route('events.destroy',[$event])}}}" method="post" style="all: unset;">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-secondary" style="display: inline-block;">Delete</button>
                                        </form>
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
