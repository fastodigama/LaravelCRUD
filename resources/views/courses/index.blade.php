@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Courses
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach($courses as $course)
                <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $course -> courseName }} </h5>
                    <hr/>
                    <p class=" mb-3 mt-2">{{ $course -> description }}</p>
                    <a href="{{ route('courses.edit', $course -> id ) }}" class="card-link">Edit</a>
                    <a href="{{ route('courses.destroy', $course -> id )}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

