<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\UpdateStudent;
use DataTables;

class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div class=" edit-student d-flex justify-content-center align-items-center"><a href="javascript:void(0)" data-id =' . $row->id . ' class="view_details btn btn-success btn-sm">Edit</a>
                    &nbsp;
                     <a href="javascript:void(0)" data-id='. $row->id .' class="stddelete btn btn-danger btn-sm" >Delete</a></div>';
                    return $actionBtn;
                })

                // ->addColumn('view_btn', function($row){
                //     $view_btn = '<a href="javascript:void(0)" data-id ='.$row->id.' class="view_details btn btn-success btn-sm">Edit</a>';
                //     return $view_btn;
                // })
                ->editColumn('full_name', function ($std) {
                    return $std->name . ' , ' . $std->username;
                })
                ->rawColumns(['action', 'full_name', 'view_btn', 'destroy_btn'])
                ->make(true);
        }
    }

    public function editStudents($id)
    {

        $students = Student::find($id);

        return view('edit', compact('students'));
        // $id = (int)$id;
        //  $data = Student::latest()->get();
        //  return Datatables::of($data)
    }

    public function updateStudents(UpdateStudent $request)
    {
        $student = Student::where('id', $request->id)->first()->update($request->all());

        return redirect()->route('students');
    }
    public function deleteStudent($id)
    {
       
        $student = Student::find($id)->first()->delete();
        return redirect()->route('students');
    }
}