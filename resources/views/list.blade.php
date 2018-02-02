@extends('theme')
@section('title')
  Drinks List
@endsection
@section('accroche')
  <br>
  <h3>Use the table for show details about drinks</h3>
@endsection
@section('content')
  <br><br>
    <div class="container">
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
