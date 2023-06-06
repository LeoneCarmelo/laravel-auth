@extends('admin.dashboard')

@section('mainDash')
<div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 mt-2 py-3 rounded-1 px-2">
            <div class="col pb-3">
                <div class="text-center">
                    <img class="img-fluid rounded-1" src="{{$project->image}}" alt="{{$project->title}}">
                </div>
            </div>
            <div class="col">
                <div><strong>Title: </strong>{{$project->title}}</div>
                <div>
                    <div class="description h-50 my-2"><strong>Description: </strong>{{$project->description}}</div>
                </div>
            </div>
        </div>
@endsection