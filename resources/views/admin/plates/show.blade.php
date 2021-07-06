@extends('layouts.app')

@section('page_title')
    Booleat | Il Piatto | {{$plate->name}}    
@endsection

@section('content')

    {{-- <div class="main_logo container">
        <img src="{{asset('storage/image/bool_eat.png')}}" alt=""></a>
    </div> --}}
    
    <div class="dashboard_container">

        
        @include('partials.aside_left')

        {{-- dashboard right (menu) --}}
        <div class="dashboard_right">



                <section class="container-fluid">

                    {{-- titolo  --}}
        
                
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
        

        
                {{-- piatto --}}

                <div class="container-fluid">

                    <div class="col-12">
        
                        <div class="dashboard_right-showplate">
        
                            <div class="dashboard-right box-padding">

                                <div class="plate">
                                    <h2 >{{$plate->name}}</h2>
                    
                                    {{-- immagine con storage --}}
                                    {{-- <img class="mb-5 mt-5" src="{{$plate->image ? asset('storage/' . $plate->image) : 'https://via.placeholder.com/200'}}" alt="{{$plate->title}}"> --}}
                                    {{-- /immagine con storage --}}
                    
                                    {{-- immagine con remoto --}}
                                    <img src="{{ asset('storage/' . $plate->image )}}" alt="{{$plate->name}}" style="">
                                    {{-- /immagine con remoto --}}
                    
                                    {{-- ingredienti --}}
                                    <div class="block">
                                        <h4>Ingredienti: </h4>
                                        <p class="par"> {{ $plate->ingredients}}</p>
                                    </div>
                                    {{-- /ingredienti --}}
                    
                                    
                                    {{-- Descrizione --}}
                                    <div class="block">
                                        <h4>Descrizione: </h4>
                                        <p class="par">{{ $plate->description }}</p>
                                    </div>
                                    {{-- /Descrizione --}}
            
                    
                                    {{-- prezzo --}}
                                    <div class="block">
                                        <h4>Prezzo: </h4>
                                        <p class="par">{{ $plate->price }} &euro;</p>
                                    </div>
                                    {{-- /prezzo --}}
                    
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="plate_container">

                </div>
                {{-- /piatto --}}
        </div> 
        {{-- /dashboard right (menu) --}}
    </div>
@endsection



