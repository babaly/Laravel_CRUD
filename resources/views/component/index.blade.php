@extends('layout.core')
@section('title', 'Laravel CRUD App')
@section('content')
<div class="row mt-4">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
  </div>
  <div class="col-md-2"></div>
</div>
<div class="row mt-4">
    <form method="POST" action="{{ route('component.index') }}">
        @csrf
        <div class="col-md-5">
            <div class="form-floating mb-3">
                <label for="floatingInput" class="d-flex"><strong>Nom</strong></label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="floatingInput" placeholder="Ex: Mamadou Baba LY">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-floating mb-3">
                <label for="floatingInput" class="d-flex"><strong>Âge</strong></label>
                <input type="number" name="age" value="{{ old('age') }}" class="form-control" id="floatingInput" placeholder="Ex: 24">
            </div>
        </div>
        <div class="col-md">
            <button type="sumbit" class="btn btn-primary mt-4"><i class="fas fa-plus-circle mr-1"></i>Ajouter</button>
        </div>
    </form>
</div>
<div class="row">
    <table class="table table-hover table-bordered mt-4">
    <thead class="table-primary">
        <tr>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td class="table-buttons">
                <a href="{{ route('component.edit', $user) }}" class="btn btn-outline-info"><i class="fas fa-edit mr-1"></i>Edit</a>
                <form method="POST" action="{{ route('component.destroy', $user) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger ml-2"><i class="fas fa-trash-alt mr-1"></i>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>

@endsection