@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('salesTeames.create')}}" class="btn btn-primary">ADD Sales Teams</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Telephone</td>
          <td>Current Route:</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($salesTeamses as $salesTeam)
        <tr>
            <td>{{$salesTeam->id}}</td>
            <td>{{$salesTeam->name}}</td>
            <td>{{$salesTeam->email}}</td>
            <td>{{$salesTeam->telephone}}</td>
            <td>{{$salesTeam->current_route}}</td>
            <td><a href="{{ route('salesTeames.edit', $salesTeam->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('salesTeames.destroy', $salesTeam->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection