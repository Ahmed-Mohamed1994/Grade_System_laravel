<?php
class professor extends BaseController
{
    public $object;
    public function __construct(){
        $this->object=database::get_instance();
    }


////////////////////////////////////////////

    //login
    public function login()
    {
        $object_login=SignIn::get_instance();
        $return =  $object_login->User_login('professor','Mail','password','inputmail','password','Professor');

        return $return;

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
        $return = $object_profile->post_profile('professor','Mail','Professor');
        return $return;
    }
////////////////////////////////////////////

    //Get,Post->Register_First
    public function get_register_course_first()
    {
        return View::make('professors/register_course_first');
    }
    public function post_register_course_first()
    {
        $input1['courses'] = Input::get('courses');


        $rule1 = array('courses' => 'unique:prof_course,course_id');


        $validator = Validator::make($input1, $rule1);


        if ($validator->fails()) {

            return Redirect::to('register_courses_first_step')->with('exists', 'That Course is already registered.');
        } else {


            $val = array(
                'prof_id' => Input::get('prof_id'),
                'course_id' => Input::get('courses')

            );
            $this->object->add('prof_course', $val);

            $co = Input::get('courses');

            return Redirect::to("register_courses_second_step=$co=0")->with('success', 'You successfully registered Course .');

        }
    }
////////////////////////////////////////////

    //Get,Post->Register_Second
    public function get_register_course_second($id, $id2)
    {
        Session::put('field_id', $id2);
        Session::put('course_id', $id);

        return View::make('professors/register_course_second');
    }
    public function post_register_course_second($id, $id2)
    {
        $courses = Session::get('course_id');


        $val = array(
            'value' => Input::get('value_field'),
            'course_id' => $id,

            'field_id' => $id2

        );
        $this->object->add('course_fields', $val);


        return Redirect::to("register_courses_second_step=$id=$id2")->with('success', 'You successfully add value in field for this Course .');

    }
////////////////////////////////////////////

    //Get,Post->Register_third
    public function get_register_course_third($course_id)
    {
        Session::put('course', $course_id);

        return View::make('professors/register_course_third');
    }
    public function post_register_course_third($course_id)
    {

        return Redirect::to("register_courses_third_step=$course_id");
    }
////////////////////////////////////////////

    //Post->Register_third2
    public function post_register_course_third2($course_id)
    {

        $choose = Input::get('choose_teacher');

        if(is_array($choose)) {
            foreach ($choose as $choose_teacher) {
                $val = array
                (
                    'prof_course_id' => Input::get('prof_id'),
                    'teacher_id' => $choose_teacher
                );

                $this->object->add('sub_teacher', $val);

            }
        }
        return Redirect::to("register_courses_first_step")->with('success', 'You successfully Registerd Course');
    }
////////////////////////////////////////////

    //View->Register_Course
    public function get_view_register_course()
    {
        return View::make('professors/view_register_course');
    }
////////////////////////////////////////////

    //View->Course_fields
    public function view_course_fields($course_id)
    {

        Session::put('view_course_fields', $course_id);
        return View::make('professors/view_register_course_fields');
    }
////////////////////////////////////////////

    //View->Course_teachers
    public function view_course_teachers($course_id)
    {
        Session::put('view_course_teachers', $course_id);

        return View::make('professors/view_register_course_teachers');
    }
////////////////////////////////////////////

    //Delete->Register_Course
    public function delete_register_course($course_id)
    {



        $this->object->delete('prof_course', 'course_id', '=', $course_id);
        $this->object->delete('course_fields', 'course_id', '=', $course_id);
        return Redirect::to('view_register_courses')->with('success', "You successfully delete Course number ($course_id)");
    }
////////////////////////////////////////////

    //Delete->Register_Course_fields
    public function delete_register_course_field($course_id,$field_id)
    {



        $this->object->delete('course_fields', 'field_id', '=', $field_id);
        return Redirect::to("view_course_fields=$course_id")->with('success', "You successfully delete Fiels number ($field_id)");
    }

////////////////////////////////////////////

    //Notify->get
    public function get_make_notify()
    {
        return View::make('professors/make_notify');
    }
////////////////////////////////////////////

    public function post_make_notify()
    {
        $data = [ 'msg' => Input::get('des') ];
        $table=Input::get('choose');
        $col='';

        if($table=="teacher")
        {
            $col='Mail';
        }
        else
        {
            $col='mail';
        }


        $count=$this->object->view("$table",'count','','id','','');
        $array=array();
        for($i=0;$i<$count;$i++)
        {
            if($this->object->view("$table",'where_pluck','id','=',($i+1),$col))
            $array[$i] = $this->object->view("$table",'where_pluck','id','=',($i+1),$col);
        }
        Mail::queueOn('mail','emails.mailer',$data, function($message) use ($array)
        {
                $file            = Input::file('upload');
                $destinationPath = "/wamp/www/GradeSystem/public/assets/Notify_files";
                $filename        = str_random(6) . '_' . $file->getClientOriginalName();
                $uploadSuccess   = $file->move($destinationPath, $filename);

            $subject = Input::get('subject');
            $message->to($array)->subject($subject);
            $message->attach("$destinationPath/$filename");
        });

        return Redirect::to('make_notify')->with('success','You Successfully Notify all Your '."$table");
    }
}