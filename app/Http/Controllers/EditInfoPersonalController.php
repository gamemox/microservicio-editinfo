<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EditInfo;

class EditInfoPersonalController extends Controller
{
  function getEditInfoPersonalAlu(Request $request){
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Access-Control-Allow-Credentials: true');              

//    return response()->json("controller");
    return  json_encode("controller");
//    $findObjet=EdifInfo::where('KNUMERUT','=',$request->input("rut"))->first();
//    
//    if($findObjet!=null){
//        $findObjet->apaterno=$request->input('apaterno');
//        $findObjet->save();
//        return  json_encode("ok");
//    }else{
//        return  json_encode("no");
//    }
  }
}
