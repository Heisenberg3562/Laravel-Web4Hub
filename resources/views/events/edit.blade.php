@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="block-heading">
                <h2 class="text-info">Edit Event</h2>
                <p>Let's Make Something Awesome<br>Edit your event to make it even Better!<br></p>
            </div>
            <div class="card">
                <div class="card-header">
                    Edit Event

                    <a href=" {{ route('events.index') }}" class="float-right">Back</a>
                </div>

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
                                <option value="Type 1" {{ 'Type 1' == old('type', $event->type) ? 'selected' : '' }} >Type 1</option>
                                <option value="Type 2" {{ 'Type 2' == old('type', $event->type) ? 'selected' : '' }}>Type 2</option>
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
        </div>
    </div>
</div>
@endsection
