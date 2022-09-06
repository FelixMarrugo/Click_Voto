@extends('adminlte::page')

@section('title', 'Home')
@section('content')

    <div class="row" style="margin-top: 25px">
        <div class="col" >
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://picsum.photos/400/300" class="img-fluid"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Yerson Garcia</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://picsum.photos/400/300" class="img-fluid"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Juan Ayala</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://picsum.photos/400/300" class="img-fluid"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Felix Marrugo</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
        </div>
    </div>
@endsection