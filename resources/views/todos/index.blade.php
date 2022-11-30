@extends('app')

@section('content')

<div class="container w-50 border p-4 mt-4">
<form>
  <div class="mb-3">
    <label for="title" class="form-label">Título de la tarea</label>
    <input type="text" class="form-control" id="title">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
