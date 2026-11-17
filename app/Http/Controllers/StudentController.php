<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $students = Student::all();
    return view('index', compact('students'));
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required',
            'section' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $fileName);
        $validateData['image'] = $fileName;

        Student::create($validateData);

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
{
    return view('show', compact('student'));
}

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required',
            'section' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = public_path('image/' . $student->image);
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $fileName);
            $validateData['image'] = $fileName;
        }

        $student->update($validateData);

        return redirect('/students');
    }

    public function destroy(Student $student)
    {
        $imagePath = public_path('image/' . $student->image);
        if (file_exists($imagePath)) {
            @unlink($imagePath);
        }
        
        $student->delete();

        return redirect('/students');
    }

}