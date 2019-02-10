<?php

namespace App\Http\Controllers;

use App\Department;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Image;

class AdminController extends Controller
{
    public function admin_dashboard(){
        return view('enrollment.admin.admin-dashboard');
    }



    public function addDepartmant(){
        return view('enrollment.admin.add-department');
    }

    public function saveDepartmantInfo(Request $request){
            $departments = new Department();
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_department_" . $imageName;
            $directory = public_path('/department-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(300, 300)->save($imageUrl);
            $departments->image = $fileName;
        }

        $departments->name = $request->name;
        $departments->code = $request->code;
        $departments->email = $request->email;
        $departments->password = $request->password;
        $departments->phone = $request->phone;
        $departments->tuition_fee = $request->tuition_fee;
        $departments->slug = $request->slug;
        $departments->save();
        return redirect()->back();
}

    public function manageDepartmentInfo(){
        $departments = Department::all();
        return view('enrollment.admin.manage-department', compact('departments'));
    }

    public function editDepartmentInfo($id){
        $department = Department::find($id);
        return view('enrollment.admin.edit-department', compact('department'));
    }

    public function updateDepartmentInfo(Request $request){
        $department = Department::find($request->name_id);
        if ($request->hasFile('image')){
            if ($department->image){
                unlink(public_path('/department-images/').$department->image);
            }

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_department_" . $imageName;
            $directory = public_path('/department-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(300, 300)->save($imageUrl);
            $department->image = $fileName;
        }

        $department->name = $request->name;
        $department->code = $request->code;
        $department->email = $request->email;
        $department->password = $request->password;
        $department->phone = $request->phone;
        $department->tuition_fee = $request->tuition_fee;
        $department->slug = $request->slug;
        $department->save();
        return redirect('/manage-department');
        }

        public function deleteDepartmentInfo($id){
            $department = Department::find($id);
            $department->delete();
            return redirect('manage-department');
        }
    


    public function addTeacher(){
        return view('enrollment.admin.add-teacher');
    }

    public function saveTeacherInfo(Request $request){
        $teachers = new Teacher();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = time().'_teacher_'.$imageName;
            $directory = public_path('/teacher-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(300, 300)->save($imageUrl);
            $teachers->image = $fileName;
        }

        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->password = $request->password;
        $teachers->phone = $request->phone;
        $teachers->n_id = $request->n_id;
        $teachers->father_name = $request->father_name;
        $teachers->mother_name = $request->mother_name;
        $teachers->urgent_contact = $request->urgent_contact;
        $teachers->present_address = $request->present_address;
        $teachers->permanent_address = $request->permanent_address;
        $teachers->salary = $request->salary;
        $teachers->slug = $request->slug;
        $teachers->department_id = $request->department_id;
        $teachers->save();
        return redirect()->back();
    }

    public function manageTeacherInfo(){
        $teachers = Teacher::all();
        return view('enrollment.admin.manage-teacher', compact('teachers'));
    }

    public function editTeacherInfo($id){
        $teachers = Teacher::find($id);
        return view('enrollment.admin.edit-teacher', compact('teachers'));
    }

    public function updateTeacherInfo(Request $request){
        $teachers = Teacher::find($request->name_id);
        if ($request->hasFile('image')){
            if ($teachers->image){
                unlink(public_path('/teacher-images/'.$teachers->image));
            }

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = time().'_teacher_'.$imageName;
            $directory = public_path('/teacher-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(300, 300)->save($imageUrl);
            $teachers->image = $fileName;
        }

        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->password = $request->password;
        $teachers->phone = $request->phone;
        $teachers->n_id = $request->n_id;
        $teachers->father_name = $request->father_name;
        $teachers->mother_name = $request->mother_name;
        $teachers->urgent_contact = $request->urgent_contact;
        $teachers->present_address = $request->present_address;
        $teachers->permanent_address = $request->permanent_address;
        $teachers->salary = $request->salary;
        $teachers->slug = $request->slug;
        $teachers->department_id = $request->department_id;
        $teachers->save();
        return redirect('/manage-teacher');

    }

    public function deleteTeacherInfo($id){
        $teachers = Teacher::find($id);
        $teachers->delete();
        return redirect('manage-teacher');
    }




    public function addStudent(){
        return view('enrollment.admin.add-student');
    }

    public function saveStudentInfo(Request $request){
        $students = new User();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = time().'_student_'.$imageName;
            $directory = public_path('/student-images/');
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

    public function manageStudentInfo(){
        $students = User::all();
        return view('enrollment.admin.manage-student', compact('students'));
    }

    public function editStudentInfo($id){
        $students = User::find($id);
        return view('enrollment.admin.edit-student', compact('students'));
    }

    public function updateStudentInfo(Request $request){
        $students = User::find($request->name_id);
        if ($request->hasFile('image')){
            if ($students->image){
                unlink(public_path('/student-images/'.$students->image));
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = time().'_student_'.$imageName;
            $directory = public_path('/student-images/');
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
        return redirect('/manage-student');

    }

    public function deleteStudentInfo($id){
        $students = User::find($id);
        $students->delete();
        return redirect('/manage-student');
    }
}
