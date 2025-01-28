<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(10);
        $tr = "Some value"; 
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // التحقق من البيانات المدخلة
    $validatedData = $request->validate([
        'name' => 'required|unique:courses,name',
        'description' => 'nullable',
        'logo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    // إذا تم تحميل صورة
    if ($request->hasFile('logo')) {
        $validatedData['logo'] = $request->file('logo')->store('logos', 'public');
    }

    // إنشاء الكورس
    Course::create($validatedData);

    return redirect()->route('courses.index')->with('success', 'Course created successfully.');
}
    

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:courses,name,' . $course->id, // السماح بتكرار الاسم إذا كان نفس السجل
            'logo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // إذا كنت تتعامل مع صورة
        ]);
    
        // إذا تم تحميل صورة جديدة
        if ($request->hasFile('logo')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($course->logo && Storage::disk('public')->exists($course->logo)) {
                Storage::disk('public')->delete($course->logo);
            }
    
            // حفظ الصورة الجديدة
            $validatedData['logo'] = $request->file('logo')->store('logos', 'public');
        }
    
        // تحديث البيانات
        $course->update($validatedData);
    
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        
    if ($course->logo) {
        Storage::delete($course->logo);
        $course->logo = null; 
        $course->save(); 
    }

    return redirect()->route('courses.index')->with('success', 'Logo deleted successfully');

    }
}
