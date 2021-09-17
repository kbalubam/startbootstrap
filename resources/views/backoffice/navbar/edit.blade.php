@extends('template.welcome')
@section('content')
<form action="{{route('navbar.update', $navbar->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">nav1</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="nav1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">nav2</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="nav2">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">nav3</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="nav3">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
