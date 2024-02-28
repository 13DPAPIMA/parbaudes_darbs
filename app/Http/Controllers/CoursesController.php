<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'banner_url' => 'required|string',
        'participant_count' => 'required|integer'
    ]);

    $course = Course::create($request->all());

    return response()->json(['message' => 'Izveidots kursiņš', 'course' => $course], 201);
}

public function index()
{
    $courses = Course::all();
    return response()->json(Course::all());
}
}
