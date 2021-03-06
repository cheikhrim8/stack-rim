@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>{{ __('All Questions') }}</h2>
                            <div class="ml-auto">
                                <a href="{{route('questions.create')}}" class="btn btn-outline-secondary">Ask Question</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.alerts._messages')
                        @foreach($questions as $question)
                            <div class="media">

                                <div class="d-flex flex-column counters">
                                    <div class="vote">
                                        <Strong>{{$question->votes}}</Strong> {{Str::plural('vote' , $question->votes)}}
                                    </div>
                                    <div class="status {{$question->status}}">
                                        <Strong>{{$question->answers}}</Strong> {{Str::plural('answer' , $question->answers)}}
                                    </div>
                                    <div class="view">
                                        {{$question->views . ' ' . Str::plural('view', $question->views)}}
                                    </div>
                                </div>

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
