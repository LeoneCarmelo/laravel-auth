@extends('admin.dashboard')

@section('mainDash')
<div class="container">
    <h1 class="text-center py-3">Projects</h1>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="">
                    <td scope="row">{{$project->id}}</td>
                    <td scope="row">{{$project->title}}</td>
                    <td scope="row">{{$project->slug}}</td>
                    <td scope="row">{{$project->image}}</td>
                    <td scope="row">{{$project->description}}</td>
                </tr>
                @empty
                <tr class="">
                    <td scope="row">Sorry, no projects found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
</div>

@endsection