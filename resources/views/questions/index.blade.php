@extends('main')

@section('content')
<div class="card gedf-card mb-3 shadow bg-white rounded ml-3 mr-3">
    <div class="card-header pb-2 pt-2">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                </div>
                <div class="ml-2">
                    <div class="h6 m-0">nama</div>
                    <div class="h7 text-muted">email</div>
                </div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                        <div class="h6 dropdown-header">Options</div>
                        <a class="dropdown-item" href="#">Share</a>
                        <a class="dropdown-item" href="#">Report</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body pb-3 pt-3">
        <a class="card-link" href="#">
            <h5 class="card-title">judul</h5>
        </a>

        <p class="card-text">
            tanggal
        </p>
    </div>
    <div class="card-footer mr-0">
        <div class="row">
            <div class="col-md-11">
                <i class="fa fa-clock text-muted"></i>
                <span class="laed inline text-muted">Published At:
                    tanggal
            </div>
            <div class="col-md-1">
                <a href="#" class="card-link"><i class="fa fa-share"></i> Answer</a>
            </div>
        </div>
    </div>
</div>
@endsection