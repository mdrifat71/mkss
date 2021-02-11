<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

class AdminNewsController extends Controller
{
    public function insert(Request $request)
    {
        
        
    
      if ($request->hasFile("image"))
      {
          $data = $request->all();
          $file = $request->file("image");

          //checking title (if exist)
          $title = $data['title'];
          $queryTitle = DB::table("news")->select("title")->where("title",$title)->get();
          if (count($queryTitle) != 0)
          {
            return -3;
          }

          $newName = uniqid()."".$file->getClientOriginalName();
          $dest = public_path()."\image\\news";
   
            $data["image"] = $newName;

            //increment project count
            $newscategoryid = $data['newscategoryid'];
            $findCategory = NewsCategory::find($newscategoryid);
            if ($findCategory)
            {
              $findCategory->totalnews = $findCategory->totalnews+1;
              $findCategory->save();
            }

            
          if($file->move($dest, $newName))
          {
              if (News::create($data))
                return 1;
            return -1;
          }
          return 0;
          
      }
    }


    public function getList()
    {
          return DB::table("news")
      ->select("news.title", "news.id", "newscategory.name as category")
      ->join("newscategory", "newscategory.id", "news.newscategoryid")
      ->orderByRaw("newscategory.created_at asc")
      ->get();
    }

    public function singleNews($id)
    {
         return News::find($id);
    }

    public function deleteNews($id)
    {
       
      $news = News::find($id);
      $file_path = public_path()."\image\news\\".$news["image"];
      $category = NewsCategory::find($news["newscategoryid"]);
      $category->totalnews = $category->totalnews-1;
      $category->save();

      if (!File::exists($file_path))
      {
        if($news->delete())
          return 1;
        else
          return 0;
      }
      else
      {
        if (File::delete($file_path))
        {
          if($news->delete())
            return 1;
          else
            return 0;
        }
        else
          return -1;
      }
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $news = News::find($id);


         if ($news)
         {
           //checking title (if exist)
            if ($news->title != $data["title"])
            {
              $title = $data['title'];
              $queryTitle = DB::table("news")->select("title")->where("title",$title)->get();
              if (count($queryTitle) != 0)
              {
                return -3;
              }
            }
             $category = NewsCategory::find($news->newscategoryid);
             $category->totalnews = $category->totalnews-1;
             $category->save();
             $category = NewsCategory::find($data["newscategoryid"]);
             $category->totalnews = $category->totalnews+1;
             $category->save();
             
            if ( $request->hasFile("image") )
            {
             
               $file = $request->file("image");
               $newName = uniqid()."".$file->getClientOriginalName();
               $dest = public_path()."\image\\news";

                File::delete(public_path()."\image\project\\".$news->image);
              $file->move($dest, $newName);
              $data["image"] = $newName;
            }  

           DB::table("news")
            ->where("id", $id)
            ->update(
              [
                "title"=> $data["title"],
                "newscategoryid"=> $data["newscategoryid"],
                "description" => $data["description"],
                "imagecaption"=>$data["imagecaption"],
                "image" =>$request->hasFile("image") ? $data["image"] : $news->image,
                "meta_description"=> $data["meta_description"],
                "meta_keyword"=> $data["meta_keyword"],
                "meta_robots" => $data["meta_robots"]
              ]
            );
           
           
            $news->save();
            return 1;
         }
         return 0; 
    }
    
}