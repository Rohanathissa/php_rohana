<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Salse Teame Member Data
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
      <form method="post" action="{{ route('salesTeames.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" require name="name"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="email">Email:</label>
              <input type="text" class="form-control" require name="email"/>

          </div>
          <div class="form-group">
              @csrf
              <label for="telephone">Telephone:</label>
              <input type="text" class="form-control" require name="telephone"/>

          </div>
          <div class="form-group">
              @csrf
              <label for="current_route">Current Route:</label>
              <input type="text" class="form-control"  require name="current_route"/>
          </div>
          <button type="submit" class="btn btn-primary">Add </button>
      </form>
  </div>
</div>
@endsection