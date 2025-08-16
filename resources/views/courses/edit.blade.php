@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Update Course Details
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('courses.update', $course -> id) }}" method="post">
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="courseName" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="courseName" name="courseName" aria-describedby="name"  value="{{ $course -> courseName }}">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="desc" name="description" aria-describedby="description"value="{{ $course -> description }}">
            </div>
                         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

