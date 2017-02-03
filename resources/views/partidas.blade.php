@extends('layouts.mapa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    </br>
                    </br>
                    </br>
                    </br>
                     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLNDDoIJy4ZFyAKX3KZ9zIPMKA15q4vD4&libraries=places&callback=initMap"
        async defer></script>
                </div>
                <div class="panel-body">
                     <input id="pac-input" class="controls" type="text" placeholder="Buscar la localización">
                    <div id="type-selector" class="controls">
                      <input type="radio" name="type" id="changetype-all" checked="checked">
                      <label for="changetype-all">All</label>
                
                      <input type="radio" name="type" id="changetype-establishment">
                      <label for="changetype-establishment">Establecimientos</label>
                
                      <input type="radio" name="type" id="changetype-address">
                      <label for="changetype-address">Direcciones</label>
                
                      <input type="radio" name="type" id="changetype-geocode">
                      <label for="changetype-geocode">Geocodes</label>
                    </div>
                    <div id="map"></div>

                </div>
                
            </div>
        </div>
        <div class="col-md-3 " style="margin-left: 5px">
            </br>
            </br>
            </br>
            </br>
            <div class="bottom-buffer bottom-bordered" >
                <div class="form-inline right-buffer text-center">
                    <div class="form-group">
                        <form action="">
                            <label> Introduzca Una Fecha:</label>
                            <input type="date" class="form-control" aria-describedby="basic-addon1"/>
                        </form>
                    </div>
                </div>                    
            </div>
            </br>
            </br>
            </br>
            </br>
           <div class="form-inline right-buffer text-center top-buffer" >
                <div class="form-group left-buffer-info" >
                    <label for="filter" class="lead">Eventos </label>
                    <select class="form-control input-lg" name="Evento" id="BusEvento" style="max-width:190px">
                        <option value="todosEvent">Todos los eventos</option>
                        <option value="misDeport">De mis deportes</option>
                        <option value="amigGrups">De mis amigos y grupos</option>
                    </select>
                        </br>
                        </br>
                        <div class="list-group" id="div_todosEvent">
                          <a href="#" class="list-group-item "> 12:00 </a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                        </div>
                       <div class="list-group" id="div_misDeport">
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                        </div>
                        <div class="list-group" id="amigGrups">
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                        </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection