@extends('layouts.admin') <!-- points to admin.blade.php in admin/layouts -->

@section('content')
<div class="container mt-4">
    <h1>Add New Category</h1>
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button>
    </form>
</div>
@endsection
