@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="block-heading">
                <h2 class="text-info">Create Event</h2>
                <p>Let's Make Something Awesome<br>Your account is all set up, it's time to create your Event!<br></p>
            </div>
            <div class="card">

                <div class="card-header">
                    Add Event

                    <a href=" {{ route('events.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', '' ) }} "/>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body', '' ) }}</textarea>
                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input name="date" class="form-control @error('date') is-invalid @enderror" type="date" value="{{ old('date', '' ) }}"/>
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
                                <option value="Type 1" {{ 'Type 1' == old('type', '') ? 'selected' : '' }} >Type 1</option>
                                <option value="Type 2" {{ 'Type 2' == old('type', '') ? 'selected' : '' }}>Type 2</option>
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fees">Enrollment Fees</label>
                            <input name="fees" class="form-control @error('fees') is-invalid @enderror" type="number" value="{{ old('fees', '' ) }}"/>
                            @error('fees')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <legend><h6>Status</h6></legend>

                            <div class="form-check @error('status') is-invalid @enderror">
                                <input type="radio" class="form-check-input" name="status" value="1"  {{ '1' == old('status', '') ? 'checked' : '' }}>
                                <label for="active" class="form-check-label">Yes</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" value="0"  {{ '0' == old('status', '') ? 'checked' : '' }}>
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
                            <input name="poster" class="form-control @error('poster') is-invalid @enderror" type="file" accept="image/*"/>
                            @error('poster')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
