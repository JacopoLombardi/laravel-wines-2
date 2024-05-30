@extends('layouts.admin')

@section('content')

<div class="container p-5 bg-dark-subtle rounded-5">
    <h1 class="text-center fw-bold">New Wine</h1>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.wines.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="wine" class="form-label  fw-bold">Wine</label>
                    <input
                        name="wine"
                        type="text"
                        class="form-control"
                        @error('wine')
                            is-invalid
                        @enderror
                        id="wine"
                        value="{{ old('wine') }}"

                        >
                    @error('wine')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input
                      name="image"
                      type="file"
                      class="form-control"
                      onchange="showImage(event)"
                      @error('image')
                            is-invalid
                        @enderror
                      id="image"
                      value="{{ old('image') }}">

                      @error('image')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="winery" class="form-label fw-bold">Winery</label>
                    <input
                      name="winery"
                      type="text"
                      class="form-control"
                      @error('winery')
                            is-invalid
                        @enderror
                      id="winery"
                      value="{{ old('winery') }}">

                      @error('winery')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="rating_average" class="form-label fw-bold">Rating Average</label>
                    <input
                      name="rating_average"
                      type="number"
                      class="form-control"
                      @error('rating_average')
                            is-invalid
                        @enderror
                      id="rating_average"
                      value="{{ old('rating_average') }}">

                      @error('rating_average')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="rating_reviews" class="form-label fw-bold">Rating Reviews</label>
                    <input
                      name="rating_reviews"
                      type="text"
                      class="form-control"
                      id="rating_reviews"
                      value="{{ old('rating_reviews') }}">
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="location" class="form-label fw-bold">location</label>
                    <input
                      name="location"
                      type="text"
                      class="form-control"
                      @error('location')
                            is-invalid
                        @enderror
                      id="location"
                      value="{{ old('location') }}">

                      @error('location')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <button class="btn btn-danger" type="submit">Aggiungi il Vino</button>
            <a href="{{route('admin.wines.index')}}"  class="btn btn-danger" type="submit"><i class="fa-solid fa-backward"></i></a>
        </div>
</div>

    </form>
</div>

<script>
    function showImage(event){
        const thumb = document.getElementById('image')
        thumb.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

@endsection


