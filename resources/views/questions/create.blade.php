@extends('main')

@section('content')

@section('title', 'Ask Question')

<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card shadow bg-white rounded ml-3 mr-3 shadow-lg">
            <div class="card-body">
                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="title" name="title" class="form-control border-primary" id="title"
                            placeholder="Give relatable title here ...">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea type="text" class="form-control border-primary" id="body" name="body"
                            placeholder="Write your question here ..." rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Question</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection