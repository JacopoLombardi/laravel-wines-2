@extends('Admin.home')

@section('content')

    <div class="container bg-dark-subtle p-5 rounded-5">
        <div class="row">
            <div class="col-4"><img class="img-fluid w-100 h-100" src="{{ $wine->image }}" alt=""></div>

            <div class="col-8">
                <h1>{{ $wine->wine }}</h1>
                <p>{{ $wine->winery }}</p>
                <p>{{ $wine->rating_avarega }}</p>
                <p>{{ $wine->rating_reviews }}</p>
                <p>{{ $wine->location }}</p>
            </div>

    </div>


</div>
