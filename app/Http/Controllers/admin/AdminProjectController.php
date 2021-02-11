<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Sector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

/***@Response key=========
  1  == success
  -1 == imageUploaded but not the post
  -3 == title exist (title should be unique)
*/
class AdminProjectController extends Controller
{
    public function get()
    {
        return Project::get();
    }

    public function getList()
    {
      return DB::table("projects")
      ->select("projects.title", "projects.status", "projects.id", "sectors.name as sector")
      ->join("sectors", "sectors.id", "projects.sectorid")
      ->orderByRaw("projects.status desc")
      ->get();
    }
    public function insert(Request $request)
    {
    
      if ($request->hasFile("image"))
      {
          $data = $request->all();
          $file = $request->file("image");

          //checking title (if exist)
          $title = $data['title'];
          $queryTitle = DB::table("projects")->select("title")->where("title",$title)->get();
          if (count($queryTitle) != 0)
          {
            return -3;
          }

          $newName = uniqid()."".$file->getClientOriginalName();
          $dest = public_path()."\image\project";
        //  $ext = $file->getClientOriginalExtension();

            
            $data["image"] = $newName;

            //increment project count
            $sectorid = $data['sectorid'];
            $findSector = Sector::find($sectorid);
            if ($findSector)
            {
              $findSector->totalproject = $findSector->totalproject+1;
              $findSector->save();
            }

          if($file->move($dest, $newName))
          {
              if (Project::create($data))
                return 1;
            return -1;
          }
          return 0;
          
      }
     
    }


    public function deleteProject($id)
    {
      $project = Project::find($id);
      $file_path = public_path()."\image\project\\".$project["image"];
      $sector = Sector::find($project["sectorid"]);
      $sector->totalproject = $sector->totalproject-1;
      $sector->save();

      if (!File::exists($file_path))
      {
        if($project->delete())
          return 1;
        else
          return 0;
      }
      else
      {
        if (File::delete($file_path))
        {
          if($project->delete())
            return 1;
          else
            return 0;
        }
        else
          return -1;
      }
    }

    public function singleProject($id)
    {
      return Project::find($id);
    }


    public function update( Request $request, $id)
    {
        $data = $request->all();
       
        $project = Project::find($id);

         if ($project)
         {
            //checking title (if exist)
             $title = $data['title'];
            if ($project->title != $data["title"])
            {
              
              $queryTitle = DB::table("projects")->select("title")->where("title",$title)->get();
              if (count($queryTitle) != 0)
              {
                return -3;
              }
            }
            
            if ( $request->hasFile("image") )
            {
             

               $file = $request->file("image");
               $newName = uniqid()."".$file->getClientOriginalName();
               $dest = public_path()."\image\project";
                File::delete(public_path()."\image\project\\".$project->image);
           
              $file->move($dest, $newName);
              $data["image"] = $newName;
            }    
           
            DB::table("projects")
            ->where("id", $id)
            ->update(
              [
                "title"=> $data["title"],
                "from"=> $data["from"],
                "to"=> $data["to"],
                "area"=> $data["area"],
                "sectorid"=> $data["sectorid"],
                "description" => $data["description"],
                "status" => $data["status"],
                "image" => $request->hasFile("image") ? $data["image"] : $project->image,
                "meta_description"=> $data["meta_description"],
                "meta_keyword"=> $data["meta_keyword"],
                "meta_robots" => $data["meta_robots"]
              ]
            );
           
            return 1;
         }
         return 0; 
    }

    /* project overview */
    public function updateProjectOverview(Request $request)
    {
      $content = $request->all()["content"];
      DB::table("single_pages")
      ->where("name", "project_overview")
      ->update(["content"=> $content]);
    }

    public function getProjectOverview()
    {
      return  DB::table("single_pages")
      ->where("name", "project_overview")
      ->get()
      ->first()
      ->content;
    }
}