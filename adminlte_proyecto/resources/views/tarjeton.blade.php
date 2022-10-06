@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="contenedor-tarjeton">
    <div class="section-tarjeton">
        <div class="tarjeton">
            <div class="contenido">
                <div>
                    <img src="11.png">
                </div>
                <div id="No-tarjeton">
                    No. Tarjeton
                </div>
            </div>
            <div class="contenido">
                <div class="nombre">
                    
                </div>
                <div class="descripcion">
                    
                </div>
            </div>
        </div>
        <div class="tarjeton">
            <div class="contenido">
                <div>
                    <img src="11.png">
                </div>
                <div id="No-tarjeton">
                    No. Tarjeton
                </div>
            </div>
            <div class="contenido">
                <div class="nombre">
                    
                </div>
                <div class="descripcion">
                    
                </div>
            </div>
            <div class="">

            </div>
        </div>
    </div>
    <div class="section-tarjeton">
        <div class="tarjeton">
            <div class="contenido">
                <div>
                    <img src="11.png">
                </div>
                <div id="No-tarjeton">
                    No. Tarjeton
                </div>
            </div>
            <div class="contenido">
                <div class="nombre">
                    
                </div>
                <div class="descripcion">
                    
                </div>
            </div>
        </div>
        <div class="tarjeton">
            <div class="contenido">
                <div>
                    <img src="{{ asset('img/11.jpg') }}">
                </div>
                <div id="No-tarjeton">
                    No. Tarjeton
                </div>
            </div>
            <div class="contenido">
                <div class="nombre">
                    
                </div>
                <div class="descripcion">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    generar();
</script>


<div class="row">
    <div class="col">
        <h1 class="hola">Hola</h1>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
@stop

@section('js')

    <script>
         generar();
    alert('Estoy en el javascript');
function generar(){
    let nombre = "EL MANDA CALLA";
    let nombres = document.querySelectorAll(".nombre");
    
    let desc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim corporis saepe porro? Eos impedit, possimus repudiandae ipsa repellendus autem! Perspiciatis cupiditate blanditiis deleniti sed rerum alias saepe a fugiat possimus.";
    let descripcion = document.querySelectorAll(".descripcion");
    
    for (let i = 0; i < nombres.length; i++) {
        nombres[i].innerHTML = nombre;
    }
    for (let i = 0; i < descripcion.length; i++) {
        descripcion[i].innerHTML = desc;
    }
}

function subir() {
    var data = document.createElement("INPUT");
    data.setAttribute("type", "file");
    document.body.appendChild(data);
}</script>
@stop