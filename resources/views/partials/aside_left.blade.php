{{-- dahsboard left (modifica dati vari, visualizza) --}}
<aside class="dashboard_left box-padding ">
  <div class="dashboard_left-container">
    <div class="dashboard_left-container-admin ">
      {{-- logo --}}
      {{-- <img src="{{ Auth::user()->logo }}" src="{{Auth::user()->logo ? asset('storage/' . Auth::user()->logo) : 'https://via.placeholder.com/200'}}" alt=""> --}}

      {{-- <img src="https://www.freeiconspng.com/thumbs/restaurant-icon-png/restaurant-icon-png-7.png" alt=""> --}}
      
      {{-- Restaurant name --}}
      <div class="box-padding dashboard_left-container-admin-txt">
        <h3 class=" text-capitalize ">{{ Auth::user()->name }}</h3>
      </div>

      {{-- bottone modifica dati --}}
    </div>
          
    {{-- modifiche varie --}}
    <div class="dashboard_left-container-button mb-4 ">
      <a href="{{route('admin.user.edit' , ['user' => Auth::user()->id])}}" class="box-padding mb-1"><h5> Modifica i tuoi dati</h5></a>

      <a href="{{route('home')}}" class="box-padding mb-1"><h5>Dashboard</h5></a>

      <a href="{{ route('admin.plates.index') }}" class="box-padding mb-1"><h5>Visualizza Menù</h5></a>

      <a href="{{route('admin.plates.create')}}" class="box-padding mb-1"></span><h5>Aggiungi Piatto</h5></a>

    </div>
    {{-- /modifiche varie --}}


    {{-- button logout --}}
    <div class="dashboard_left-container-logout box-padding">
      <div class="box-padding">
        <button class="btn dashboard_left-container-logout-btn" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt fa-2x mr-2"></i>
        <h5>Logout</h5>
        {{ __('') }}
    </button>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
        @csrf
    </form>

      </div>
    </div>
  </div>
</aside>
{{-- /dahsboard left (modifica dati vari, visualizza) --}}