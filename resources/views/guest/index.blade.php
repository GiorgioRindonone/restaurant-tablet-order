@extends('layouts.templateOrder')

@section('pageTitle')
Tablet Application | Ordina comodamente dal tuo tavolo
@endsection


@section('content')  
    @include('partials.header')
    
    <aside class="dashboard_left box-padding" >
        <div class="dashboard_left-container">
        <div class="dashboard_left-container-admin ">
            
            {{-- Restaurant name --}}
            <div class="box-padding dashboard_left-container-admin-txt">
            <h3 class="">Selezione i tuoi piatti</h3>
            </div>
    
            {{-- bottone modifica dati --}}
        </div>
                
        {{-- modifiche varie --}}
        <div class="dashboard_left-container-button mb-4 ">
            
            <button  v-for='(category, index) in categories' class="dashboard_left-container-admin-button">
                <a class="box-padding" :key="category.id" href="" v-text="category.name" ></a>
                
            </button>
        </div>
        {{-- /modifiche varie --}}
    
    
        {{-- button logout --}}
            </div>
        </div>
        </div>
    </aside>
    {{-- /dahsboard left (modifica dati vari, visualizza) --}}

@endsection





@section('script')


@endsection

