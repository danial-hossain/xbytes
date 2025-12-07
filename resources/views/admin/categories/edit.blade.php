@extends('layouts.admin')

@section('content')
<div class="content-header">
    <h2>Edit Category</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary mb-3">Back to Categories</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
@endsection
