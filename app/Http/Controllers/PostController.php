<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;

use App\Classes\Helper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FormPostRequest;
use Illuminate\Support\Facades\Schema;




class PostController extends Controller
{
    public function store(FormPostRequest $request)
    {
        if(!DB::connection()->getDatabaseName()){
            return redirect()
            ->back()
            ->with("failed", "Database connection lost");
        }
        if(!(Schema::hasTable('posts') && Schema::hasTable('images'))){
            return redirect()
            ->back()
            ->with("failed", "Database tables are missing");
        }
        if (!($request->has('name') && 
        $request->has('surname') && 
        $request->has('address') && 
        $request->has('description') && 
        $request->hasFile('fileupload'))){
            abort(404);
        }
        if ($images = $request->file('fileupload'))
        {
            $db_post = new Post;
            $db_post->_name = $request->input('name');
            $db_post->_surname = $request->input('surname');
            $db_post->_address = $request->input('address');
            $db_post->_description = $request->input('description');
            $db_post->_code = Helper::getUniqueCode($request->input('name'));
            $db_post->save();
            foreach ($images as $image)
            {
                $db_image = new Image;
                $img_name = md5(str_shuffle(uniqid()));
                $img_extension = strtolower($image->getClientOriginalExtension());
                $fullname = $img_name . '.' . $img_extension;
                $path = "documents/";
                $image->move($path, $fullname);
                $db_image->_image_path = $path . $fullname;
                $db_image->post_id = $db_post->id;
                $db_image->save();
            }
            return redirect()
            ->back()
            ->with("success", "Data Added Successfully")
            ->with('link', $db_post->_code);
        }
        
    }

    public function show($code)
    {
      $db_post = Post::where('_code',$code)->firstOrFail();
        //dd($db_post);
        //dd($db_post->postModels);
      return view('show')->with('data',$db_post);
    }

}

