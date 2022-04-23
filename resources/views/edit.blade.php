@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Game Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('salesTeames.update', $salesTeam->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name:</label>
              <input type="text" class="form-control" value="{{ $salesTeam->name }}"  name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" value="{{ $salesTeam->email }}" name="email"/>
          </div>
          <div class="form-group">
          <label for="telephone">Telephone:</label>
              <input type="text" class="form-control" value="{{ $salesTeam->telephone }}" name="telephone"/>
          </div>
          <div class="form-group">
          <label for="current_route">Current Route:</label>
              <input type="text" class="form-control"  value="{{ $salesTeam->current_route }}" name="current_route"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection