@extends('layouts.app')

@section('page_title')
    Booleat | Modifica i tuoi dati
@endsection

@section('content')


<div class="dashboard-container">

    @include('partials.aside_left')

    <div class="dashboard_right ">

        <section class="container-fluid">

            {{-- titolo  --}}

            <div class="mt-4 mb-0 box-padding">
                <h2 class="text-uppercase">Modifica dati Ristorante</h2>
                    <p >Ai clienti piace rimanere aggiornati, non farli aspettare!</p>   
            </div>  
        
                {{-- toast  --}}
                @if (session('save_name'))
                <div class="alert alert-danger">
                    {{ session('save_name') }}
                </div>
                @endif
                {{-- /toast  --}}
                
                {{-- errori --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- /errori --}}



        </section>
        
        <div class="container-fluid">

            <div class="col-12">

                <div class="dashboard_right-edituser">

                    <div class="dashboard-right box-padding">
                        {{-- form di modifica piatto --}}
                        <form class="" action="{{route('admin.user.update', ['user' => Auth::user()->id] )}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf



                            <div class="form-group form-fields mb-2">
                                <label for="restaurant_name">Nome del Ristorante</label>
                                <input type="text" class="form-control" name="restaurant_name" id="restaurant_name" placeholder="Inserisci il nome" value="{{Auth::user()->restaurant_name}}">
                            </div>

                            <div class="form-group form-fields mb-2">
                                <label for="address">Indirizzo</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Indirizzo" value="{{Auth::user()->address}}">
                            </div>

                            <div class="form-group form-fields">
                                <label for="phone_number">Numero di telefono</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Inserisci il numero di cellulare" value="{{Auth::user()->phone_number}}">
                            </div>

                            <div class="form-group form-fields">
                                <label for="vat_number">Partita IVA</label>
                                <input type="text" class="form-control" name="vat_number" id="vat_number" placeholder="Inserisci l' Iva" value="{{Auth::user()->vat_number}}">
                            </div>

                            {{-- <h3>Categorie Ristorante</h3>
                            @foreach ($genres as $genre)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$genre->id}}" id="{{$genre->name}}" name="genres[]" {{ Auth::user()->genres->contains($genre) ? 'checked' : ''}}>
                                <label class="form-check-label" for="{{$genre->name}}">
                                {{$genre->name}}
                                </label>
                                    {{-- check checkbox --}}
                                    {{-- <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span> --}}
                                    {{-- /check checkbox --}}
                            {{-- </div> --}}
                            {{-- @endforeach --}}


                            {{-- bottone submit --}}
                            <div class="form-fields">
                            <button type="submit" class="btn btn-success mt-3">Salva!</button>
                            </div>
                            {{-- /bottone submit --}}

                        </form>
                        {{-- /form di modifica piatto --}}

                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

    
@endsection