@extends('layouts.guest')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron text-center bg-dark text-white">
            <h1 class="display-4">Benvenuti alla nostra Enoteca!</h1>
            <p class="lead">Scopri i migliori vini selezionati per te</p>
            <a href="#" class="btn btn-primary btn-lg">Visita il nostro shop</a>
            {{-- {{ route('wines.index') }} --}}
        </div>

        <h2 class="text-center my-5 text-white">I Nostri Vini Selezionati</h2>
        <div class="row">
            {{-- @foreach($wines as $wine) --}}
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="">
                        {{-- {{ asset('images/' . $wine->image) }} --}}
                        {{-- {{ $wine->name }} --}}
                        <div class="card-body text-white">
                            <h5 class="card-title"></h5>
                            {{-- {{ $wine->name }} --}}
                            <p class="card-text"></p>
                            {{-- {{ $wine->description }} --}}
                            <a href="" class="btn btn-primary">Scopri di più</a>
                            {{-- {{ route('wines.show', $wine->id) }} --}}
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>

        <h2 class="text-center my-5 text-white">I Nostri Servizi</h2>
        <div class="row">
            <div class="col-md-4 text-center text-white">
                <i class="fa fa-truck fa-3x mb-3" aria-hidden="true"></i>
                <h4>Consegna Veloce</h4>
                <p>Consegna rapida e sicura direttamente a casa tua.</p>
            </div>
            <div class="col-md-4 text-center text-white">
                <i class="fa fa-glass fa-3x mb-3" aria-hidden="true"></i>
                <h4>Degustazioni!!</h4>
                <p>Organizziamo degustazioni per farti scoprire nuovi sapori.</p>
            </div>
            <div class="col-md-4 text-center text-white">
                <i class="fa fa-users fa-3x mb-3" aria-hidden="true"></i>
                <h4>Eventi</h4>
                <p>Partecipa ai nostri eventi e incontra altri appassionati di vino.</p>
            </div>
        </div>

        <h2 class="text-center my-5 text-white">Contattaci</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3 ">
                <form action="" method="POST">
                    {{-- {{ route('wines.index') }} --}}
                    @csrf
                    <div class="form-group text-white">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="message">Messaggio</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
