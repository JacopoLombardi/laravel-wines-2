@extends('layouts.admin')

@section('content')
<div class="container bg-dark-subtle p-5 rounded-5">
    <div class="row">
        <div class="col-4">
            <img class="img-fluid w-100 h-100 rounded-2" src="{{ $wine->image }}" alt="">
        </div>
        <div class="col-8 d-flex flex-column justify-content-between">
            <div>
                <h1 class="fw-bold">{{ $wine->wine }}</h1>
                <h3>{{ $wine->winery }}</h3>
                <p>{{ $wine->rating_avarega }}</p>
                <p>{{ $wine->rating_reviews }}</p>
                <p>{{ $wine->location }}</p>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('admin.wines.index') }}"><i class="fa-solid fa-arrow-left-long"></i></a>
            </div>
        </div>
    </div>

</div>
@endsection
