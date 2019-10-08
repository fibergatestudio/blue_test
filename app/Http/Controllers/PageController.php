<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Pages;
use DB;

class PageController extends Controller
{
    //

    public function index($page){

        //dd($page);

        $checkpage = DB::table('pages')->where('slug',$page)->first();

        if($checkpage){

            $page_slug = $checkpage->slug;
            $page_title = $checkpage->title;
            $page_body = $checkpage->body;
            $meta_title = $checkpage->meta_title;
            $meta_descr = $checkpage->meta_descr;
            $meta_keys = $checkpage->meta_keys;
            $filename = $checkpage->image;

            $image = storage_path($filename);
            //$image = Storage::get($filename);

            //dd($image);

            return view('custompages.custompage',
            [
                'page_slug' => $page_slug,
                'page_title' => $page_title,
                'page_body' => $page_body,
                'meta_title' => $meta_title,
                'meta_descr' => $meta_descr,
                'meta_keys' => $meta_keys,
                'filename' => $filename
            ]);
        } else {

            return abort(404);

        }
    }

    public function createPage(Request $request){


        $page_slug = $request->page_slug;

        $dup_check = DB::table('pages')->where('slug', $page_slug)->first();


        if(!empty($dup_check)){

            //dd($dup_check);

            session()->flash('msg', 'Duplicate Slug "' . $page_slug . '"');
            return back();


        } else {

            $page_img = $request->page_img;

            //dd($page_img);

            if($request->hasFile('page_img')){
                $image = $request->file('page_img');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                //Image::make($image)->resize(300, 300)->save( storage_path('public\uploads/' . $filename ) );
                //Storage::disk("public")->put($filename, $image);
                Storage::disk("public")->put($filename, file_get_contents($image));
            };


            $page_title = $request->page_title;
            $page_body = $request->page_body;
            $meta_title = $request->meta_title;
            $meta_descr = $request->meta_descr;
            $meta_keys = $request->meta_keys;
    
    
            $new_page = new Pages();
            $new_page->slug = $page_slug;
            $new_page->title = $page_title;
            $new_page->image = $filename;
            $new_page->body = $page_body;

            $new_page->meta_title = $meta_title;
            $new_page->meta_descr = $meta_descr;
            $new_page->meta_keys = $meta_keys;

            $new_page->save();

            return view('custompages.custompage',
            [
                'page_slug' => $page_slug,
                'page_title' => $page_title,
                'page_body' => $page_body,
                'meta_title' => $meta_title,
                'meta_descr' => $meta_descr,
                'meta_keys' => $meta_keys,
                'filename' => $filename
            ]); 

        }

    }

    public function deletePage($page_id){

        //$page_id = $request->page_id;

        dd($page_id);

        return back();
    }

    public function editPage(Request $request){

        return back();
    }

    public function editPageApply(Request $request){

        $page_id = $request->page_id;

        //dd($page_id);

        $page_slug = $request->page_slug;
        $page_title = $request->page_title;
        $page_body = $request->page_body;
        $meta_title = $request->meta_title;
        $meta_descr = $request->meta_descr;
        $meta_keys = $request->meta_keys;


        DB::table('pages')
        ->where('id', $page_id)
        ->update([
            'slug' => $page_slug,
            'title' => $page_title,
            'body' => $page_body,
            'meta_title' => $meta_title,
            'meta_descr' => $meta_descr,
            'meta_keys' => $meta_keys
        ]);

    


        return back();
    }

    public function success(){

        return view('custompages.success');
    }

    public function error(){

        return view('custompages.error');
    }
}
