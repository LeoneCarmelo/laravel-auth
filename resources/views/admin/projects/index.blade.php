@extends('admin.dashboard')

@section('mainDash')
<div class="container">
    <h1 class="text-center py-3">Projects</h1>
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('message')}}</strong>
    </div>
    @endif
    <a class="btn btn-primary my-2 " href="{{route('admin.projects.create')}}" role="button">Add Project</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link Project</th>
                    <th scope="col">Link Website</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="">
                    <td scope="row">{{$project->id}}</td>
                    <td scope="row">{{$project->title}}</td>
                    <td scope="row">{{$project->slug}}</td>
                    <td scope="row">
                        <img src="{{$project->image}}" width="120" alt="">
                    </td>
                    <td scope="row">
                        <div id="desc">
                            {{$project->description}}
                        </div>
                    </td>
                    <td scope="row"><a href="{{$project->link_project}}">{{$project->link_project}}</a></td>
                    <td scope="row"><a href="{{$project->link_website}}">{{$project->link_website}}</a></td>
                    <td scope="row">
                        <a href="{{route('admin.projects.show', $project->slug)}}"><span>View</span></a>
                        <a href="{{route('admin.projects.edit', $project->slug)}}"><span>Edit</span></a>
                        <a href=""><span>Delete</span></a>


                    </td>
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