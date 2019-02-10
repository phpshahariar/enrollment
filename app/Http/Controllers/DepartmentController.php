<?php

namespace App\Http\Controllers;

use App\DepartmentInfo;
use App\DepartmentTeacher;
use App\StudentInfo;
use Illuminate\Http\Request;
use Image;

class DepartmentController extends Controller
{
        public function index(){
            return view('enrollment.department.index');
        }

        public function addTeacher(){
            return view('enrollment.department.add-department-teacher');
        }

        public function saveDepartmentTeacher(Request $request){
            $deptTeachers = new DepartmentInfo();
            if ($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $fileName = time().'_deptteacher_'.$imageName;
                $directory = public_path('/department-teacher-images/');
                $imageUrl = $directory.$fileName;
                Image::make($image)->resize(300, 300)->save($imageUrl);
                $deptTeachers->image = $fileName;
            }
            $deptTeachers->name = $request->name;
            $deptTeachers->email = $request->email;
            $deptTeachers->password = $request->password;
            $deptTeachers->phone = $request->phone;
            $deptTeachers->n_id = $request->n_id;
            $deptTeachers->father_name = $request->father_name;
            $deptTeachers->mother_name = $request->mother_name;
            $deptTeachers->urgent_contact = $request->urgent_contact;
            $deptTeachers->present_address = $request->present_address;
            $deptTeachers->permanent_address = $request->permanent_address;
            $deptTeachers->salary = $request->salary;
            $deptTeachers->slug = $request->slug;
            $deptTeachers->department_id = $request->department_id;
            $deptTeachers->save();
            return redirect()->back();
        }

        public function manageDepartmentTeacher(){
            $deptTeachers = DepartmentInfo::all();
            return view('enrollment.department.manage-department-teacher', compact('deptTeachers'));
        }

        public function editDepartmentTeacher($id){
            $deptTeachers = DepartmentInfo::find($id);
            return view('enrollment.department.edit-department-teacher', compact('deptTeachers'));
        }

        public function updateDepartmentTeacher(Request $request){
            $deptTeachers = DepartmentInfo::find($request->name_id);
            if ($request->hasFile('image')){
               if ($deptTeachers->image) {
                   unlink(public_path('/department-teacher-images/' . $deptTeachers->image));
               }

                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $fileName = time().'_deptteacher_'.$imageName;
                $directory = public_path('/department-teacher-images/');
                $imageUrl = $directory.$fileName;
                Image::make($image)->resize(300, 300)->save($imageUrl);
                $deptTeachers->image = $fileName;
            }
            $deptTeachers->name = $request->name;
            $deptTeachers->email = $request->email;
            $deptTeachers->password = $request->password;
            $deptTeachers->phone = $request->phone;
            $deptTeachers->n_id = $request->n_id;
            $deptTeachers->father_name = $request->father_name;
            $deptTeachers->mother_name = $request->mother_name;
            $deptTeachers->urgent_contact = $request->urgent_contact;
            $deptTeachers->present_address = $request->present_address;
            $deptTeachers->permanent_address = $request->permanent_address;
            $deptTeachers->salary = $request->salary;
            $deptTeachers->slug = $request->slug;
            $deptTeachers->department_id = $request->department_id;
            $deptTeachers->save();
            return redirect('/manage-department-teacher');

            }

            public function viewDepartmentTeacher($id){
                $deptTeachers = DepartmentInfo::find($id);
            return view('enrollment.department.view-department-teacher', compact('deptTeachers'));
            }



            public function addDepartmentStudent(){
            return view('enrollment.department.add-department-student');
            }


            public function saveDepartmentStudent(Request $request){
                $students = new StudentInfo();
                if ($request->hasFile('image')){
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    $fileName = time().'_student_'.$imageName;
                    $directory = public_path('/department-student-images/');
                    $imageUrl = $directory.$fileName;
                    Image::make($image)->resize(300, 300)->save($imageUrl);
                    $students->image = $fileName;
                }

                $students->name = $request->name;
                $students->student_id = $request->student_id;
                $students->email = $request->email;
                $students->password = $request->password;
                $students->phone = $request->phone;
                $students->n_id = $request->n_id;
                $students->father_name = $request->father_name;
                $students->mother_name = $request->mother_name;
                $students->urgent_contact = $request->urgent_contact;
                $students->present_address = $request->present_address;
                $students->permanent_address = $request->permanent_address;
                $students->waver = $request->waver;
                $students->slug = $request->slug;
                $students->department_id = $request->department_id;
                $students->save();
                return redirect()->back();
            }


            public function manageDepartmentStudent(){
                $students = StudentInfo::all();
                return view('enrollment.department.manage-department-student', compact('students'));
            }

            public function editDepartmentStudent($id){
                $students = StudentInfo::find($id);
                return view('enrollment.department.edit-department-student', compact('students'));
            }

            public function updateDepartmentStudent(Request $request){
                $students = StudentInfo::find($request->name_id);
                if ($request->hasFile('image')){
                    if ($students->image){
                        unlink(public_path('/department-student-images/'.$students->image));
                    }
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    $fileName = time().'_student_'.$imageName;
                    $directory = public_path('/department-student-images/');
                    $imageUrl = $directory.$fileName;
                    Image::make($image)->resize(300, 300)->save($imageUrl);
                    $students->image = $fileName;
                }
                $students->name = $request->name;
                $students->student_id = $request->student_id;
                $students->email = $request->email;
                $students->password = $request->password;
                $students->phone = $request->phone;
                $students->n_id = $request->n_id;
                $students->father_name = $request->father_name;
                $students->mother_name = $request->mother_name;
                $students->urgent_contact = $request->urgent_contact;
                $students->present_address = $request->present_address;
                $students->permanent_address = $request->permanent_address;
                $students->waver = $request->waver;
                $students->slug = $request->slug;
                $students->department_id = $request->department_id;
                $students->save();
                return redirect('manage-department-student');
            }


            public function viewDepartmentStudent($id){
                $students = StudentInfo::find($id);
                return view('enrollment.department.view-department-student', compact('students'));
            }


}
