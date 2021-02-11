<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoverningBody;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
class AdminGovernanceController extends Controller
{
    public function get($id)
    {
        return GoverningBody::find($id);
    }

    public function getList()
    {
        return GoverningBody::get();
    }

    public function insert(Request $request)
    {
        if ($request->hasFile("image"))
        {
            $data = $request->all();
            $file = $request->file("image");
            $newName = uniqid()."".$file->getClientOriginalName();
            $dest = public_path()."\image\governing";
            //  $ext = $file->getClientOriginalExtension();

                
            $data["image"] = $newName;

            if($file->move($dest, $newName))
            {
                if (GoverningBody::create($data))
                    return 1;
                return -1;
            }
            return 0;
            
        }
     
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
       
        $employer = GoverningBody::find($id);

         if ($employer)
         {
            if ( $request->hasFile("image") )
            {
               $file = $request->file("image");
               $newName = uniqid()."".$file->getClientOriginalName();
               $dest = public_path()."\image\governing";
                if ($file != 0)
                {
                    File::delete(public_path()."\image\governing\\".$employer->image);
                }
                $file->move($dest, $newName);
                $data["image"] = $newName;
            }    
           
            DB::table("governingbody")
            ->where("id", $id)
            ->update(
              [
                "name"=> $data["name"],
                "email"=> $data["email"],
                "status"=> $data["status"],
                "image"=> $request->hasFile("image") ?$data["image"] : $employer->image,
                "priority"=> $data["priority"],
                "description" => $data["description"],
                
              ]
            );
           
            return 1;
         }
         return 0; 
    }

    public function delete($id)
    {
      $employer = GoverningBody::find($id);
      $file_path = public_path()."\image\governing\\".$employer["image"];
     
      if (!File::exists($file_path))
      {
        if($employer->delete())
          return 1;
        else
          return 0;
      }
      else
      {
        if (File::delete($file_path))
        {
          if($employer->delete())
            return 1;
          else
            return 0;
        }
        else
          return -1;
      }
    }

    
}