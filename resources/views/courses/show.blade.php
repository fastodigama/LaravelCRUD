<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Course Detail
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $course -> name }} </h5>
                    <hr/>
                    <p class=" mb-3 mt-2">{{ $course -> description }}</p>
                    <a href="{{ route('courses.edit', $course -> id ) }}" class="card-link">Edit</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                         <button type="submit" class="btn btn-link p-0 m-0 align-baseline" onclick="return confirm('Are you sure you want to delete this course?')">
                        Delete
                    </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
