@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>{{ __('Ask Question') }}</h2>
                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back To
                                    Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('questions.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question-title">Question Title</label>
                                <input type="text" id="question-title" name="title"
                                       class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}"
                                       placeholder="Question Title">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        <strong>{{$errors->first('title')}}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="question-body"></label>
                                <textarea type="text" name="body" id="question-body"
                                          class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}"
                                          placeholder="Question Body"></textarea>
                                @if($errors->has('body'))
                                    <div class="invalid-feedback">
                                        <strong>{{$errors->first('body')}}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Ask Question" class="btn btn-outline-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
