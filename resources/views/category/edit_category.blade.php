@extends('layouts.app')


@section("content")
<div class="container">
<h2>Edit Category</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/Category/{{ $category->id }}" > <!-- ** "/" par ya ml -->
  {{ method_field("PATCH") }}
	{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="name" class="form-control" value="{{ $category->name }}"required >   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" class="form-control" value="{{ $category->description }}"required >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>	
@endsection