@extends('layouts.app')

@section('page_title')
    Booleat | Aggiungi un Piatto
@endsection

@section('content')
    {{-- <div class="main_logo container">
        <img src="{{asset('storage/image/bool_eat.png')}}" alt=""></a>
    </div> --}}
    
    <div class="container dashboard_container">

        @include('partials.aside_left')

        {{-- dashboard right (info piatti, statistiche) --}}
        <div class="dashboard_right create_plate">

            <section class="container-fluid">

                {{-- titolo  --}}

                <div class="mt-4 mb-0 box-padding">
                    <h2 class="text-uppercase">Aggiungi nuovo piatto</h2>
                        <p >Nuovi piatti incuriosiscono sempre il cliente, faglieli provare!</p>   
                </div>  
            
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


            {{-- form creazione piatto--}}
            <form action="{{route('admin.plates.store')}}" method="POST" class="" enctype="multipart/form-data">
                @method('POST')
                @csrf


            <div class="container-fluid">

                <div class="col-12">

                    <div class="dashboard_right-editmenu">

                        <div class="dashboard-right box-padding">



                                        <div class="form-group form-fields mb-3">
                                            <label for="name">Nome piatto</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci un piatto" value="{{ old('name') }}">
                                        </div>

                                        <div class="form-group form-fields mb-3" >
                                            <label for="ingredients"><h4>Ingredienti</h4></label>
                                            <textarea class="form-control" name="ingredients" id="ingredients" placeholder="Inserisci gli ingredienti" >{{ old('ingredients') }}</textarea>
                                        </div>

                                        <div class="form-group form-fields mb-3">
                                            <label for="price"><h4>Prezzo</h4></label>
                                            <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo" value="{{ old('price') }}">
                                        </div>

                                        <div class="form-group form-fields mb-3">
                                            <label for="description"><h4>Descrizione</h4></label>
                                            <textarea name="description" class="form-control" id="description" rows='4' placeholder="Descrizione">{{ old('description') }}</textarea>
                                        </div>

                                        <div class="form-group form-fields mb-3">
                                            <label for="scope"><h4>Portata</h4></label>
                                            <select name="category_id" value="{{ old('categories') }}" name="category" id="category">
                                                @foreach($categories as $index => $category){
                                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        {{-- /input info piatto --}}

                                        
                                        {{-- checkboxes tipologia--}}

                                        {{-- upload immagine --}}
                                        <div class="form-group form-fields mt-3">
                                            <label for="image">Immagine</label>
                                            {{-- <input type="text" class="form-control" id="image" name="image" placeholder="Image"> --}}
                                            <input type="file" id="image" name="image">
                                        </div>
                                        {{-- /upload immagine --}}

                                        {{-- bottone submit --}}
                                    <div class="form-fields">
                                        <button type="submit" class="btn btn-success mt-3 ">Salva!</button>
                                        {{-- /bottone submit --}}
                                    </div>
                                    </form>
                                {{-- /form creazione piatto--}}
                            </div>
                        </div>
                    
                    </div>
                </div>
        </div> 
        {{-- /dashboard right (info piatti, statistiche) --}}
    </div>
@endsection


