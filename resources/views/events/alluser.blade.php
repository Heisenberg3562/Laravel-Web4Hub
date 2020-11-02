@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header">Events</div>

                    <div class="card-body table-responsive">
                        <table class="table table-fixed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th class="th-sm">Email</th>
                                <th>Role</th>
                                <th>Joined At</th>
                                <th>Enrolls</th>
                                <th>No. of Events</th>
                                <th class="th-lg">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $users as $user)
                                <tr>
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->role }}
                                    </td>
                                    <td>
                                        {{ $user->created_at }}
                                    </td>
                                    <td>
                                        @php($count = 0)
                                        @foreach($enroll as $e)
                                            @if($e->user_id == $user->id)
                                                @php($count += 1)
                                            @endif
                                        @endforeach
                                        {{$count}}
                                    </td>
                                    <td>
                                        @php($count = 0)
                                        @foreach($events as $e)
                                            @if($e->user_id == $user->id)
                                                @php($count += 1)
                                            @endif
                                        @endforeach
                                        {{$count}}
                                    </td>
                                    <td>
{{--                                        <a href="{{ route('events.alluser') }}" class="btn btn-secondary">View</a>--}}
                                        <form action="{{ route('events.roles',[$user->id])}}" method="post" style="all: unset;">
                                            @csrf
                                            <button class="btn btn-secondary" style="display: inline-block;">Role M</button>
                                            <br>
                                        </form>
                                        <br>
{{--                                        {{dd($user)}}--}}
                                        <form action="{{ route('events.destroyuser',[$user->id])}}" method="post" style="all: unset;">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-secondary" style="display: inline-block;">Delete</button>
                                        </form>
{{--                                        {{$user}}--}}
{{--                                        {{ Form::open(['method' => 'DELETE', 'route' => ['events.destroyuser', $user->id]]) }}--}}
{{--                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
{{--                                        {{ Form::close() }}--}}
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
