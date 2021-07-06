@extends('layouts.app')

@section('page_title')
    Booleat | Il Tuo Menu
@endsection

@section('content')
<div class="wrapper">

  {{-- <div class="main_logo container">
      <img src="{{asset('storage/image/bool_eat.png')}}" alt=""></a>
  </div> --}}

  <div class=" dashboard">

    @include('partials.aside_left')

  </div>

</div>

<div class="dashboard_container">
        
  @include('partials.aside_left')
  

  {{-- dashboard right (menu) --}}
  <div id="appscroll">
      <div  v-dragscroll  class="dashboard_right ">
          
          {{-- sezione menu --}}
          <section class="container-fluid">

              {{-- titolo  --}}

              <div class="mt-4 mb-0 box-padding">
                  <h2 class="text-uppercase">Il tuo menu</h2>
                      <p >Qui puoi controllare i tuoi piatti, modificarli o cancellarli.</p>   
              </div>  
             
              {{-- toast success --}}
              @if (session('update'))
              <div class="alert alert-success">
                {{ session('update') }}
                <button type="button" class="ml-2 mb-1 close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              {{-- /toast success --}}
            
              {{-- toast delete --}}
              @if (session('delete'))
              <div class="alert alert-success">
                {{ session('delete') }}
                <button type="button" class="ml-2 mb-1 close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              {{-- /toast delete --}}



          </section>
          


          
      </div> 


      <script src="https://unpkg.com/vue@next"></script>
      <script src="https://unpkg.com/vue-dragscroll"></script>
      <script>
          

          const App = {
            data() {
            }
          }
      
          const app = Vue.createApp(App);
          app.directive('dragscroll', VueDragscroll);
          app.mount('#appscroll')
        </script>

  </div>

 

</div>

@endsection


