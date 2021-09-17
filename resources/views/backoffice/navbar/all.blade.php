@extends('template.welcome')
@section('content')
<h1>Navbar</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">titre</th>
        <th scope="col">nav1</th>
        <th scope="col">nav2</th>
        <th scope="col">nav3</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($navbars as $navbar)

        <tr>
        <th scope="row">{{$navbar->id}}</th>
            <td>{{$navbar->titre}}</td>
            <td>{{$navbar->nav1}}</td>
            <td>{{$navbar->nav2}}</td>
            <td>{{$navbar->nav3}}</td>
            <td>
            <a href="{{route('navbar.edit', $navbar->id)}}">
            <button type="button" class="btn btn-primary">Edit
            </button>
            </a>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>

@endsection
