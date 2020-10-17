@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    {{ $event->title }}--}}

{{--                    <a href=" {{ route('events.index') }}" class="float-right">Back</a>--}}
{{--                </div>--}}

{{--                <div class="card-body">--}}
{{--                    {{ $event->body}}--}}

{{--                    <p class="font-weight-bold">--}}
{{--                        Status: {{ $event->status == 1 ? 'Yes' : 'No'}}--}}
{{--                        Type: {{ $event->type }}--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        Date : {{$event->date}}--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        Fees : {{$event->fees}}--}}
{{--                    </p>--}}
{{--                    <img src="{{asset('assets/img/event/'.$event->poster)}}" height="400px">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<main class="page product-page">
    <section class="clean-block clean-product dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Web4Hub</h2>
                <p>Easy-to-use, powerful online event management.</p>
            </div>
            <div class="block-content">
                <div class="product-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gallery">
                                <div class="sp-wrap"><a href="{{asset('assets/img/event/'.$event->poster)}}"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/event/'.$event->poster)}}"></a><a href="{{asset('assets/img/event/'.$event->poster)}}"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/event/'.$event->poster)}}"></a><a href="{{asset('assets/img/event/'.$event->poster)}}"><img class="img-fluid d-block mx-auto" src="{{asset('assets/img/event/'.$event->poster)}}"></a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <h3>{{ $event->title }}</h3>
                                <div class="rating"><img src="{{asset('assets/img/star.svg')}}"><img src="{{asset('assets/img/star.svg')}}"><img src="{{asset('assets/img/star.svg')}}"><img src="{{asset('assets/img/star-half-empty.svg')}}"><img src="{{asset('assets/img/star-empty.svg')}}"></div>
                                <div class="price">
                                    <h3>₹{{ $event->fees }}</h3>
                                </div><a class="btn btn-primary btn-lg" type="button" href="{{ route('enrolls.show', [$event],[$enroll] ) }}"><i class="icon-basket"></i>@if($enroll.value('')=='[]')Enroll now @else Unenroll @endif</a><p></p>
                                <div class="summary">
                                    <p>{{ $event->body }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
        {{--                            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" id="specifications-tabs" href="#specifications">Specifications</a></li>--}}
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                <p>
                                    {{ $event->body }}
                                </p>
                            </div>
                            <div class="tab-pane fade show specifications" role="tabpanel" id="specifications">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="stat">Specification 1</td>
                                            <td>data 1 </td>
                                        </tr>
                                        <tr>
                                            <td class="stat">Specification 2</td>
                                            <td>data 2</td>
                                        </tr>
                                        <tr>
                                            <td class="stat">Specification 3</td>
                                            <td>data 3</td>
                                        </tr>
                                        <tr>
                                            <td class="stat">Specification 4</td>
                                            <td>data 4</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
</main>
@endsection
