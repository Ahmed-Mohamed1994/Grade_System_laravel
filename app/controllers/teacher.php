<?php
    class teacher extends BaseController
{
        public $object;

        //__construct
        public function __construct()
        {
            $this->object = database::get_instance();

        }
    //login
    public function login()
        {
            $object_login=SignIn::get_instance();
            $return =  $object_login->User_login('teacher','Mail','password','inputmail','password','Teacher');

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
                $return = $object_profile->post_profile('teacher','Mail','Teacher');
                return $return;
            }
}