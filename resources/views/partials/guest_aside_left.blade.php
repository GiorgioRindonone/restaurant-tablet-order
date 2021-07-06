{{-- dahsboard left (modifica dati vari, visualizza) --}}
<aside class="dashboard_left box-padding ">
  <div class="dashboard_left-container">
    <div class="dashboard_left-container-admin ">
      {{-- logo --}}
      {{-- <img src="{{ Auth::user()->logo }}" src="{{Auth::user()->logo ? asset('storage/' . Auth::user()->logo) : 'https://via.placeholder.com/200'}}" alt=""> --}}

      {{-- <img src="https://www.freeiconspng.com/thumbs/restaurant-icon-png/restaurant-icon-png-7.png" alt=""> --}}
      
      {{-- Restaurant name --}}
      <div class="box-padding dashboard_left-container-admin-txt">
        <h3 class=" text-capitalize ">Selezione i tuoi piatti</h3>
      </div>

      {{-- bottone modifica dati --}}
    </div>
          
    {{-- modifiche varie --}}
    <div class="dashboard_left-container-button mb-4 ">
      @yield('guest_aside')
    </div>
    {{-- /modifiche varie --}}


    {{-- button logout --}}
      </div>
    </div>
  </div>
</aside>
{{-- /dahsboard left (modifica dati vari, visualizza) --}}