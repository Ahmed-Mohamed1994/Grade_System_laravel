<?php
class SignIn extends BaseController implements login
{

    public  function __construct()
    {
    }

    static public function get_instance()
    {

        return new SignIn();
    }

    public function User_login($table, $col_1, $col_2, $input_1, $input_2,$type)
    {


        $input=Input::all();



        Session::put('table', $table);
        $inputs = array(
            $col_1 => $input[$input_1],
            $col_2 => $input[$input_2]
        );

        if (Auth::attempt($inputs)) {



                $object = database::get_instance();
                $val = array(

                    'user_session' => $input[$input_1],
                    'type' => $type
                );

                 $object->add('users_login',$val);


                return Redirect::to('/');




        } else {


            return Redirect::to('/')->with('exists', 'Wrong E-Mail Or Password');


        }
    }
}
?>
