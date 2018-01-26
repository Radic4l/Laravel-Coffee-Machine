@extends('theme')
@section('title')
    @foreach ($drinks as $key)
        Detail about {{$key->NAME}}
    @endforeach
@endsection

@section('content')
    <br><br><br>
<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($drinks as $key)
            <tr>
                <td>{{$key->NAME}}</td>
                <td>{{$key->PRICE}}</td>
          @endforeach
        </tbody>
  </table>
  <a class="btn btn-outline-info" href="/manage-drinks" role="button">Back</a>
</div>
@endsection
