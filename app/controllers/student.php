<?php
class student extends BaseController
{

    public $object;

    //__construct
    public function __construct(){
        $this->object=database::get_instance();
    }
////////////////////////////////////////////

    //login
    public function login()
    {
        $object_login=SignIn::get_instance();
        $return =  $object_login->User_login('students','stu_id','password','inputid','password','Student');

        return $return;

    }
////////////////////////////////////////////

    //RegisterCourse
    public function get_view_register(){


        return View::make('Student/view_registers');


    }
    public function get_register_course(){


        return View::make('Student/register_course');


    }
    public function post_register_course(){

        $name  = Input::get('select');
        if(is_array($name)) {
            foreach ($name as $check) {
                $values = array($check);

                $users = DB::table('prof_course')->whereIn('id', $values)->get();

                foreach ($users as $user) {

                    $course_id = $this->object->view('prof_course', "where_pluck", 'id', '=', "$user->id", 'course_id');

                    $users = DB::table('users_login')
                        ->orderBy('id', 'desc')->first();
                    $stu_id = $users->user_session;
                    $student_id=$this->object->view('students',"where_pluck",'stu_id','=',$stu_id,'id');

                    $val = array(
                        'student_id' => $student_id,
                        'course_id' => $course_id,
                        'sub_teacher_id' => Null
                    );

                    $this->object->add('register_course_section', $val);

                }


            }
        }


        return Redirect::to('teacher_select');
    }
////////////////////////////////////////////

    //TeacherSelect
    public function get_select_teacher()
    {


        return View::make('Student/teacher');

    }
    public function post_select_teacher(){

        $name = Input::get('select_teacher');

        if(is_array($name)) {

            foreach ($name as $check) {
                $values = array($check);

                $users = DB::table('sub_teacher')->whereIn('id', $values)->get();

                foreach ($users as $user) {

                    $sub_teacher_id = $this->object->view('sub_teacher', "where_pluck", 'id', '=', "$user->id", 'id');
                    $course_id_1 = $this->object->view('prof_course', "where_pluck", 'id', '=', "$user->prof_course_id", 'course_id');
                    $course_id_2 = $this->object->view('register_course_section', "where_pluck", 'course_id', '=', "$course_id_1", 'course_id');
                    $users = DB::table('users_login')
                        ->orderBy('id', 'desc')->first();
                    $stu_id = $users->user_session;
                    $student_id=$this->object->view('students',"where_pluck",'stu_id','=',$stu_id,'id');
                    $val = array(
                        'sub_teacher_id' => $sub_teacher_id
                    );

                    DB::table('register_course_section')
                        ->where('student_id', $student_id)
                        ->where('course_id', $course_id_2)
                        ->update($val);
                }
            }
        }
        return Redirect::to('teacher_select')->with('success','You successfully Register Course');

    }
////////////////////////////////////////////

    //Profile
    public function get_profile()
    {
        $object_profile=UserProfile::get_instance();
        $return = $object_profile->get_profile();
        return $return;
    }
    public function post_profile()
    {
        $object_profile=UserProfile::get_instance();
        $return = $object_profile->post_profile('students','stu_id','Student');
        return $return;
    }
}