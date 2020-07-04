@extends('main')

@section('content')

@section('title', 'All Questions')

@foreach ($questions as $question)
<div class="card gedf-card mb-3 shadow bg-white rounded ml-3 mr-3 shadow-lg">
    <div class="card-header pb-1">
        <a class="card-link text-muted" href="{{ route('questions.show', $question->id) }}">
            <i class="fa fa-link">
                {{ $question->title }}
            </i>
        </a>
    </div>
    <div class="card-body pb-3 pt-3">
        <p class="card-text">
            {{ substr($question->body , 0, 15) }} {{ strlen($question->body) > 15 ? "..." : "" }}
        </p>
    </div>
    <div class="card-footer mr-0">
        <div class="row">
            <div class="col-md-7">
                <i class="fa fa-clock text-muted"></i>
                <span class="laed inline text-muted">Published at:
                    {{ date('M j, Y h:i a', strtotime($question->created_at)) }}
            </div>
            <div class="col-md-5 text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('answers.index', $question->id) }}">
                        <button type="button" class="btn btn-primary-outline card-link text-success inline">
                            <span class="fa fa-align-justify card-link" aria-hidden="true"></span> See Answers Only
                        </button>
                    </a>
                    <a href="{{ route('questions.edit', $question->id) }}">
                        <button type="button" class="btn btn-primary-outline card-link text-primary inline">
                            <span class="fa fa-terminal card-link" aria-hidden="true"></span> Edit
                        </button>
                    </a>
                    <form action="{{ route('questions.delete', $question->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary-outline card-link text-danger inline">
                            <span class="fa fa-trash card-link" aria-hidden="true"></span> Delete
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
<div class="d-flex">
    <div class="mx-auto">
        {!! $questions->links() !!}
    </div>
</div>

@endsection