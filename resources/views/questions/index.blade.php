@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('All Questions') }}</div>
                    <div class="card-body">
                        @foreach($questions as $question)
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="mt-0">
                                        <a href="{{route('questions.show' , $question->slug)}}">{{$question->title}}</a>
                                    </h3>
                                    <p class="lead">
                                        Asked by <a href="#">{{$question->user->name}}</a>
                                        <small class="text-muted">{{ $question->created_at->diffForHumans() }}</small>
                                    </p>
                                    <p>{{Str::limit($question->body , 250)}}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                            {{$questions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
