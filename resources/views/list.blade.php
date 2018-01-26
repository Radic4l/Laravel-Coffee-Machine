@extends('theme')
@section('title')
  List
@endsection
@section('content')
  <br><br><br>
    <div class="container">
  <h2>Drinks List</h2>
  <p>Use the table for show details about drinks</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Drinks Name</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
{{-- boucle qui liste mes boissons dans un tableau construit --}}
      @foreach ($drinks as $drink)
        <tr>
          <td>{{$drink->ID}}</td>
          <td>{{$drink->NAME}}</td>
          <td><a class="btn btn-outline-info" href="drink/{{$drink->ID}}" role="button">about {{$drink->NAME}}</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
