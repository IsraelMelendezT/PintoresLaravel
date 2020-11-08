@extends('layouts.masterinicio')
@section('title', '{{title}}')
@section('header')
@section('cont')
@section('hola')
Benvenido
@stop
    @stop
@section('cont')
@section('inicio')
    <center><h3>Bienvenido {{$user}}</h3>
            <h6>{{$llave}}</h6></center>
    <hr>
    <center><h5>Elige una opción dando click en la imagen:</h5></center>
    <table id="center">
        <center>
            <tr>
                <th><h4>Leonardo da Vinci</h4></th>
                <th><h4>Vincent van Gogh</h4></th>
                <th><h4 class="th">Edvard Munch</h4></th>
                <th><h4 class="th">Diego Rivera</h4></th>
                <th><h4 class="th">Toru Kamei</h4></th>
            </tr>
            <tr>
                <th> <a href="{{action('pintoresController@daVinci')}}"><img class="got" src="images/davinci.jpg" alt="Pintores"></a></th>
                <th><a href="{{action('pintoresController@vanGogh')}}"><img class="got" src="images/vangogh.jpg" alt="Pintores"></a></th>
                <th><a href="{{action('pintoresController@munch')}}"><img class="got" src="images/Edvard.jpg" alt="Pintores"></a></th>
                <th><a href="{{action('pintoresController@diego')}}"><img class="got" src="images/diego.jpg" alt="Pintores"></a></th>
                <th><a href="{{action('pintoresController@toru')}}"><img class="got" src="images/toru.png" alt="Pintores"></a></th>
            </tr>
        </center>
         </table> <br>
         <center>  <img src="images/logo.png" alt="Pintores" width="150px"> </center>
         <marquee behavior="Scroll" direction="left">Hecho por: Israel Mélendez Tejeda 5°E</marquee>
    <br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
         <center>   
    @stop
