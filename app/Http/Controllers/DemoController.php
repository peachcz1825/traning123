<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserMod; 
use \App\Exports\BladeExport;

class DemoController extends Controller
{
    public function index()
    {
        // return "Method GET: Index";
        return view('template');
    }

    public function demotwo()
    {
        return "Method POST: demotwo";
    }

   public function demothree()
    {
        return "Method GET, POST : demothree";
    }

    public function demofour()
    {
        return "Method GET, POST, PUT/PATCH, DELETE : demofour";
    }	



    public function testlinenoti()
    {
        $line_noti_token = "cRvCt4Od82i2c1uWT4Gs3ulMTPQZG3BHazW1bq7hlXd";
        
        $message = array(
          'message' => "EiEi",//required message
          'stickerPackageId'=> 1,
          'stickerId'=> 100
        );
        
        notify_message($message,$line_noti_token);
        
        return 'ok';
    }


    public function testexcel(){
        $user = UserMod::all();
        return \Excel::download(new BladeExport($user->toArray()), 'invoices.xlsx');
 }



}
