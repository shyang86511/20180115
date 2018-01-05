<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
use \App\Teacher;

class TeachersController extends Controller
{
    //

    public function index()
    {
        return view('teachers.index')->with('teachers',
            Teacher::latest('employed_at')->employed()->get());
    }

    public function show($id)
    {
        $t = Teacher::findOrFail($id);

        //return dd($t->employed_at);
        //return dd($t->employed_at->addDay(8)->format('Y-m-d'));
        /*
        $t = Teacher::find($id);
        if (is_null($t)) {
            abort(404);
        }
        */

        return view('teachers.show')->with('teacher', $t);
    }

    public function create()
    {
        return view('teachers.create');
    }

    /*
    public function store() {
    // 使用 Input 來取得使用者從表單輸入之資料
    $name = Input::get('teacher_name');
    $id = Input::get('teacher_id');
    return '教師名稱：' . $name . '，教師編號：' . $id;
    }
    */

    public function store(Request $request)
    {
        $teacher_new = new Teacher;
        $teacher_new->name = $request->input('name');
        $teacher_new->email = $request->input('email');
        $teacher_new->professional = $request->input('professional');
        $teacher_new->url = $request->input('url');
        $teacher_new->employed_at = $request->input('employed_at');
        $teacher_new->save();


        return redirect('teachers');
    }

    public function edit($id)
    {
        return view('teachers.edit')->with('teacher', Teacher::findOrFail($id));
    }

    public function update(Request $request)
    {
        $t = Teacher::findOrFail($request->input('id'));
        $t->update($request->all());

        return redirect('teachers');
    }

}
