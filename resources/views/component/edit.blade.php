@extends('layout.core')
@section('title', 'Laravel CRUD App')
@section('content')
<div class="row mt-4 ">
  <div class="col-md-12">
    <div class="card text-center">
        <div class="card-header">
            Modification
        </div>
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('component.update', $user) }}">
                @csrf
                @method('PATCH')
                <div class="form-floating mb-3">
                    <label for="floatingInput" class="d-flex">Nom</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="floatingInput" placeholder="Mamadou Baba LY">
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingInput" class="d-flex">Âge</label>
                    <input type="number" name="age" value="{{ $user->age }}" class="form-control" id="floatingInput" placeholder="24">
                </div>
                <div class="form-floating mb-3 d-flex">
                    <button type="sumbit" class="btn btn-success mt-4"><i class="fas fa-save mr-1"></i>Update</button>
                    <a href="{{ route('component.index') }}" class="btn btn-secondary mt-4 ml-2"><i class="fas fa-sync-alt mr-1"></i>Annuler</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection