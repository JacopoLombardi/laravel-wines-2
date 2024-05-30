@extends('layouts.admin')


@section('content')

    <div class="container">

                <h1 class="text-center ">Elenco per Aroma </h1>


                <table class="table mt-5">

                        <thead>
                        <tr>
                            <th scope="col">Aroma</th>
                            <th scope="col">Vino</th>
                        </tr>
                        </thead>
                        <tbody>

                                <tr>

                                        <th class=" "><span class="badge text-bg-success">{{$aroma->name}}</span>  </th>

                                        <td class=" align-content-center">
                                            {{-- @dump($projects) --}}
                                            <ul class="list-group">
                                                @dd($aroma)
                                                @foreach ($aroma->wines as $wine)
                                                    <li class="list-group-item">
                                                        <a href="{{route('admin.wines.show', $wine)}}">
                                                            {{$wine->id}} - {{$wine->name}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </td>


                                </tr>


                        </tbody>


                </table>



    </div>






    <script>
        function submitForm(id){
            const form = document.getElementById(`form-edit-${id}`);
            console.log(form);
            form.submit();
        }
    </script>

@endsection
