@extends('theme')
@section('title')
  List
@endsection
@section('content')
  <br><br><br><br>
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
      @foreach ($drinks as $drink)
        <tr>
          <td>{{$drink->ID}}</td>
          <td>{{$drink->NAME}}</td>
          <td>Show</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
