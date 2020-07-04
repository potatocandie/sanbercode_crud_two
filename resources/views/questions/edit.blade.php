@extends('main')

@section('title', 'Edit Question')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card shadow bg-white rounded ml-3 mr-3 shadow-lg">
            <div class="card-body">
                <form action="{{ route('questions.update', $question->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title to be updated</label>
                        <input type="title" name="title" class="form-control border-success" id="title"
                            value="{{ $question->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Body to be updated</label>
                        <textarea type="text" class="form-control border-success" id="body" name="body"
                            placeholder="Write your question here ..." rows="10">{{ $question->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default border-success">Update Question</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection