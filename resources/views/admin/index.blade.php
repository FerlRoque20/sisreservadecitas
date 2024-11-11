@extends('layouts.admin')
@section('content')
<div class = "row">
  <h1>Panel Principal</h1>
</div>

<hr>
<div class="row">

  <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
          <div class="inner">
              <h3>{{$total_usuarios}}</h3>
              <p>Usuarios</p>
          </div>
          <div class="icon">
              <i class="ion fas bi bi-file-person"></i>
          </div>
          <a href="{{url('admin/usuarios')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>

  <div class="col-lg-3 col-6">
      <div class="small-box bg-primary">
          <div class="inner">
              <h3>{{$total_secretarias}}</h3>
              <p>Secretarios</p>
          </div>
          <div class="icon">
              <i class="ion fas fas bi bi-person-circle"></i>
          </div>
          <a href="{{url('admin/secretarias')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
          <div class="inner">
              <h3>{{$total_clientes}}</h3>
              <p>Clientes</p>
          </div>
          <div class="icon">
              <i class="ion fas bi bi-person-fill-check"></i>
          </div>
          <a href="{{url('admin/clientes')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>

  <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
          <div class="inner">
              <h3>{{$total_clientes}}</h3>
              <p>Areas</p>
          </div>
          <div class="icon">
              <i class="ion fas bi bi-box-fill"></i>
          </div>
          <a href="{{url('admin/clientes')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>

</div>
@endsection