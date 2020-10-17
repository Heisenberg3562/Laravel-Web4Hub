@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Events
                        <a href=" {{ route('events.create') }}" class="float-right">Create</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Enrollments</th>
                                <th>Action</th>
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
{{--                                        <form action="{{ route('events.enrollments', [$event] ) }}" method="post" style="all: unset;">--}}
{{--                                            @method('DELETE')--}}
{{--                                            @csrf--}}
{{--                                            <button class="card-link">{{$count}}</button>--}}
{{--                                        </form>--}}
                                        <a href="{{ route('events.enrollments', [$event] ) }}" class="card-link">{{$count}}</a>

{{--                                        {{ $event->body }}--}}
                                    </td>
                                    <td>
                                        <a href="{{ route('events.show', [$event] ) }}" class="btn btn-secondary">View</a>
                                        <a href="{{ route('events.edit', [$event] ) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{route('events.destroy',[$event])}}}" method="post" style="all: unset;">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-secondary">Delete</button>
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
