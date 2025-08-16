<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Student;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //list all courses
        return view('courses.index',[
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new course
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        //save to db

        Course::create($request->validated());
        Session::flash('success', 'Course added successfully');
        return redirect() -> route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course,$id)
    {
        //show single course details
        /* compact('course') is a PHP function that creates an associative array where the key is the variable name (as a string) and the value is the variable's current value. */
        $course=Course::find($id);
        $student=$course->students;
        return view('courses.show', ['course'=>$course, 'students'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
        
        $course->update($request->validated());
        Session::flash('success', 'Course updated successfully');
        return redirect() -> route('courses.index');
    }

    /**
     * Remove the specified course from the database.
     *
     * This method receives a Course model instance via route model binding,
     * deletes the course record from the database,
     * sets a success message in the session,
     * and redirects the user back to the courses index page.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Course $course)
    {
        //
       
        $course->delete();
        Session::flash('success', 'Course deleted successfully');
        return redirect() -> route('courses.index');
    }
}
