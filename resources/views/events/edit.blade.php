@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="block-heading">
                <h2 class="text-info">Edit Event</h2>
                <p>Let's Make Something Awesome<br>Edit your event to make it even Better!<br></p>
            </div>
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    Edit Event--}}

{{--                    <a href=" {{ route('events.index') }}" class="float-right">Back</a>--}}
{{--                </div>--}}

                <div class="card-body">
                    <form action="{{ route('events.update', [$event]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $event->title ) }} "/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body', $event->body ) }}</textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input name="date" class="form-control @error('date') is-invalid @enderror" type="date" value="{{ old('date', $event->date ) }}"/>
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control @error('type') is-invalid @enderror">
                                <option value="">--Select--</option>
                                <option value="Hands-on Workshop - Virtual" {{ 'Hands-on Workshop - Virtual' == old('type', $event->type) ? 'selected' : '' }} >Hands-on Workshop - Virtual</option>
                                <option value="Hands-on Workshop - In person" {{ 'Hands-on Workshop - In person' == old('type', $event->type) ? 'selected' : '' }}>Hands-on Workshop - In person</option>
                                <option value="Speaker Session / Tech Talk - Virtual" {{ 'Speaker Session / Tech Talk - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Speaker Session / Tech Talk - Virtual</option>
                                <option value="Speaker Session / Tech Talk - In person" {{ 'Speaker Session / Tech Talk - In person' == old('type', $event->type) ? 'selected' : '' }}>Speaker Session / Tech Talk - In person</option>
                                <option value="Info Session - Virtual" {{ 'Info Session - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Info Session - Virtual</option>
                                <option value="Info Session - In person" {{ 'Info Session - In person' == old('type', $event->type) ? 'selected' : '' }}>Info Session - In person</option>
                                <option value="Android Study Jams: New to Programming - Virtual" {{ 'Android Study Jams: New to Programming - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Android Study Jams: New to Programming - Virtual</option>
                                <option value="Android Study Jams: New to Programming - In person" {{ 'Android Study Jams: New to Programming - In person' == old('type', $event->type) ? 'selected' : '' }}>Android Study Jams: New to Programming - In person</option>
                                <option value="Android Study Jams: Prior Programming Experience - Virtual" {{ 'Android Study Jams: Prior Programming Experience - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Android Study Jams: Prior Programming Experience - Virtual</option>
                                <option value="Android Study Jams: Prior Programming Experience - In person" {{ 'Android Study Jams: Prior Programming Experience - In person' == old('type', $event->type) ? 'selected' : '' }}>Android Study Jams: Prior Programming Experience - In person</option>
                                <option value="Explore ML Beginner - Virtual" {{ 'Explore ML Beginner - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Explore ML Beginner - Virtual</option>
                                <option value="Explore ML Beginner - In person" {{ 'Explore ML Beginner - In person' == old('type', $event->type) ? 'selected' : '' }}>Explore ML Beginner - In person</option>
                                <option value="Explore ML Intermediate - Virtual" {{ 'Explore ML Intermediate - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Explore ML Intermediate - Virtual</option>
                                <option value="Explore ML Intermediate - In person" {{ 'Explore ML Intermediate - In person' == old('type', $event->type) ? 'selected' : '' }}>Explore ML Intermediate - In person</option>
                                <option value="Hackathon - Virtual" {{ 'Hackathon - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Hackathon - Virtual</option>
                                <option value="Hackathon - In person" {{ 'Hackathon - In person' == old('type', $event->type) ? 'selected' : '' }}>Hackathon - In person</option>
                                <option value="Solution Challenge Event - Virtual" {{ 'Solution Challenge Event - Virtual' == old('type', $event->type) ? 'selected' : '' }}>Solution Challenge Event - Virtual</option>
                                <option value="Solution Challenge Event - In person" {{ 'Solution Challenge Event - In person' == old('type', $event->type) ? 'selected' : '' }}>Solution Challenge Event - In person</option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fees">Enrollment Fees</label>
                            <input name="fees" class="form-control @error('fees') is-invalid @enderror" type="number" value="{{ old('fees', $event->fees ) }}"/>
                            @error('fees')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <legend><h6>Status</h6></legend>

                            <div class="form-check @error('status') is-invalid @enderror">
                                <input type="radio" class="form-check-input" name="status" value="1"  {{ '1' == old('status', $event->status) ? 'checked' : '' }}>
                                <label for="active" class="form-check-label">Yes</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" value="0"  {{ '0' == old('status', $event->status) ? 'checked' : '' }}>
                                <label for="active" class="form-check-label">No</label>
                            </div>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input name="poster" class="form-control @error('poster') is-invalid @enderror" type="file" accept="image/*" value="{{ old('poster', $event->poster ) }}"/>
                            @error('poster')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
{{--        </div>--}}
    </div>
</div>
@endsection
