<?php

class database extends BaseController
{
   private function __construct(){}

   static  public function get_instance(){

        return new database();
    }


    //insert
    public function add($table,array $values)
    {
        DB::table($table)->insert(
            [$values]
        );
    }

    //update
    public function update($table,$L_where,$R_where,array $values)
    {
        DB::table($table)
            ->where($L_where, $R_where)
            ->update($values);
    }

    //delete
    public function delete($table,$L_where,$condition,$R_where)
    {
        DB::table($table)->where($L_where, $condition, $R_where)->delete();
    }

    //select

    public function  view($table,$wORo,$left,$condition,$right,$condition2)
    {
        $view=array();

        if ($left == " " or $right == " " or $wORo==" ") {

            $view = DB::table($table)->get();

        } else if($wORo=="where_get"){
            $view = DB::table($table)->where($left,$condition,$right)->get();

        }
        else if($wORo=="where_first")
        {
            $view = DB::table($table)->where($left,$condition,$right)->first();
        }
        else if($wORo=="orderBy_first")
        {
            $view = DB::table($table)->orderBy($left,$right)->first();

        }
        else if($wORo=="orderBy_pluck")
        {

            $view = DB::table($table)->orderBy($left,$right)->pluck($condition);

        }
        else if($wORo=="where_count" and $left==" " and $right==" " and $condition==" ")
        {
            $view= DB::table($table)->where($left,$condition,$right)->count();
        }
        else if($wORo=="count")
        {

            $view = DB::table($table)->count($condition);

        }
        else if($wORo=="where_pluck")
        {

            $view = DB::table($table)->where($left,$condition,$right)->pluck($condition2);

        }


        return $view;

    }

    public function upload_file($destinationFolder,$table_name,$input_name,$colname,$CRUD,$R_condition,$L_condition,$name)//i.e('images','slider',el file nafso,'name') //colname=column name
{
    $filename='';
    if (Input::hasFile($input_name)) {
        $file            = Input::file($input_name);
        $destinationPath = "/wamp/www/GradeSystem/public/assets/$destinationFolder";
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
    }


    $val = array(
        $colname => $filename
    );

    if($CRUD=="add")
    {
     $this->add($table_name,$val);

    }
elseif($CRUD=="update")
{

    $this->update($table_name,$R_condition,$L_condition,$val);


    unlink("public/assets/$destinationFolder/$name");
}

    elseif($CRUD=="delete")
    {


        $this->delete($table_name,$R_condition,'=',$L_condition);

        unlink("public/assets/$destinationFolder/$name");
    }

    return true;
}

    public function download_file($table_name,$id,$col)
    {

        $user = $this->view("$table_name", "where_first", 'id', '=', "$id",'');
        $name_of_file = $user->$col;
        $file = public_path() . "/assets/uploads/$name_of_file";
        $file_name_extension = $name_of_file;

        return Response::download($file, "$file_name_extension");


    }



}