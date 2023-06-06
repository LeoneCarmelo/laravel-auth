@extends('admin.dashboard')

@section('mainDash')
<form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="my-4">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" aria-describedby="helpIdtitle" value="{{old('title', $project->title)}}">
        <small id="helpIdtitle" class="text-muted">Insert a unique title (max 100 characters).</small>
        @error('title')
        <div class="alert alert-danger" role="alert">
            <strong>Error: </strong> {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image" aria-describedby="helpIdimage" value="{{old('image', $project->image)}}">
        <small id="helpIdimage" class="text-muted">Insert a Image's link.</small>
        @error('image')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" aria-describedby="helpIddescription" value="{{old('description', $project->description)}}">
        <small id="helpIddescription" class="text-muted">Insert description.</small>
        @error('description')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection