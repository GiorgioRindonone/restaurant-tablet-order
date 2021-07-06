@extends('layouts.app')

@section('page_title')
    Booleat | Modifica | {{$plate->name}}
@endsection

@section('content')
    
    {{-- logo --}}
    {{-- <div class="main_logo container">
        <img src="{{asset('storage/image/bool_eat.png')}}" alt=""></a>
    </div> --}}
    {{-- /logo --}}

    <div class="dashboard_container">

        @include('partials.aside_left')

        {{-- dashboard right (form) --}}
        <div class="dashboard_right">

                      {{-- sezione menu --}}
            <section class="container-fluid">

                {{-- titolo  --}}

                <div class="mt-4 mb-0 box-padding">
                    <h2 class="text-uppercase">Modifica il piatto</h2>
                        <p >Ti sei dimenticato qualcosa o è cambiato? Qui puoi aggiustare tutto.</p>   
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



            {{-- form di modifica piatto --}}

            <div class="container-fluid">

                <div class="col-12">

                    <div class="dashboard_right-editmenu">

                        <div class="dashboard-right box-padding">
    
                            <form action="{{route('admin.plates.update', ['plate' => $plate->id])}}" method="POST" enctype="multipart/form-data" class="">
                                @method('PUT')
                                @csrf
                
                                {{-- input info piatto --}}
                                <div class="form-group form-fields mb-3">
                                    <label for="name"><h4>Nome piatto</h4></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci un piatto" value="{{$plate->name}}">
                                </div>
                
                                <div class="form-group form-fields mb-3">
                                    <label for="ingredients"><h4>Ingredienti</h4></label>
                                    <textarea class="form-control" name="ingredients" id="ingredients" placeholder="Inserisci gli ingredienti" value="{{$plate->ingredients}}">{{$plate->ingredients}}</textarea>
                                </div>
                
                                <div class="form-group form-fields mb-3">
                                    <label for="price"><h4>Prezzo</h4></label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo" value="{{$plate->price}}">
                                </div>
                
                                <div class="form-group form-fields mb-3">
                                    <label for="description"><h4>Descrizione</h4></label>
                                    <textarea name="description" class="form-control" id="description" rows='4' placeholder="Descrizione" value="{{$plate->description}}">{{$plate->description}}</textarea>
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
                
                                {{-- checkbox pubblicazione--}}
                                <div class="form-check form-check-inline d-block mt-2 form-fields">
                                    <input class="form-check-input" type="checkbox" id="visible" name="visible" value="{{$plate->visible}}" {{$plate->visible ? 'checked' : ''}}>
                                    <label class="form-check-label" for="visible">Pubblica piatto</label>
                                    {{-- check checkbox --}}
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                {{-- /check checkbox --}}
                                </div>
                                {{-- /checkbox pubblicazione--}}
                
                
                                {{-- modifica immagine --}}
                                <div class="form-group form-file-upload form-file-simple mt-3 form-fields">
                                    <label for="image">Immagine</label>
                                    {{-- <input type="text" class="form-control" id="image" name="image" placeholder="Image"> --}}
                                    <input type="file"  class="inputFileHidden" id="image" name="image" value="{{$plate->image}}">
                                    {{-- button upload --}}
                                    {{-- /button upload --}}
                                </div>
                                {{-- /modifica immagine --}}
                
                                {{-- bottone submit --}}
                                <div class="form-fields">
                                <button type="submit" class="btn btn-success mt-3">Salva!</button>
                                {{-- /bottone submit --}}
                                </div>
                            </form>
                            {{-- /form di modifica piatto --}}
                
        
                        </div>
        
    
                    </div>
    
                </div>

            </div>

        </div>
        {{-- dashboard right (form) --}}
    </div>
@endsection