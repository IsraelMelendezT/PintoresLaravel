<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menú
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@menu')}}">Inicio</a></button>
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@daVinci')}}">Leonardo da Vinci</a></button>
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@vanGogh')}}">Vincent van Gogh</a></button>
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@munch')}}">Edvard Munch</a></button>
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@diego')}}">Diego Rivera</a></button>
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@toru')}}">Toru Kamei</a></button>
  <button class="dropdown-item" type="button"><a href="{{action('pintoresController@login')}}" style="color: red;">Salir</a></button>


  </div>
</div>
<hr>