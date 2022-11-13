@extends('layouts.gracias_layouts')

@section('titulo', 'Gracias')

@section('container')
    <div class="row justify-content-center">
        <div class="card text-center" style="width: 50%; margin-top: 9%;">
            <div class="card-header">
                <h1 class="display-6 text-center">Gracias por votar</h1>
            </div>
            <div class="card-body">
                <img src="{{ asset('/storage/gif/votos.gif') }}" alt="" style="border-radius: 25%; width: 50%;">
            </div>

            <div class="card-footer">
                <a href="{{route('votar_estudiante')}}" class="btn btn-lg" style="width: 50%; background-color: #13BBA3">Ir a votar</a>
            </div>
        </div>
    </div>
@endsection
