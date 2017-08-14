<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*ambil library DB*/
use Illuminate\Support\Facades\DB;

use App\Blog;
use Carbon\Carbon;

class blokKontroler extends Controller
{
    public function index()
    {
        //insert biasa
        /*$blog = new Blog;
        $blog -> tittle = 'halo surabaya';
        $blog -> description = 'isi dari Surabaya';
        $blog -> save();
        */
        ///

        //insert mass assigment
        /*Blog::create([
            'tittle' => 'sda asd',
            'description' => 'sasd',
            'updated_at'=> Carbon::now()
        ]);*/

        // Blog::craete([
        //     'tittle' => 'sidoarjo',
        //     'description' => 'isi dari sidoarjo'
        //     ]);

        ///



        //update biasa
        /*$blog = Blog::where('tittle','sda asd')->first();
        $blog ->tittle ='kkab Sidoarjo';
        $blog ->save();

        */

        //Update mass assigment
        /*Blog::find(8)->update([
            'tittle' => 'Sidoarjo'
            'description' => 'kota udang'
            ]);*/


        //DELETE
        /*$blog =Blog::find(8);
        $blog->delete();*/

        //DELETE dengan comand destroy
        //  Blog::destroy(7);
        

        //softdeletes
        //$blogs = Blog::find(7);
        //$blogs->delete();

        //restore dari softdeletes cara 1
        //$blogs = Blog::withTrashed()->get();


        //restore dari softdeletes cara 2
        //data pada delere_at menjadi NULL 
       // $blogs = Blog::withTrashed()->restore();


        $blogs =Blog::all();
        //dd = die dump
        //dd($blogs);

    	return view('blog/home',['blogs'=> $blogs]);
    }
     public function show($id)
    {	
        //inialisasi variable
    	$hasil ='ini nilai ID :'.$id;


    	/*$users = ['raditya','fad  hil','dicky'];*/

        // melakukan insert into
        /*DB::table('users')->insert([
            ['username'=> 'andis','password' => '123456']
            ]);*/

        /*ambil user dari database mysql*/
        $users = DB::table('users')->get();

        /*menggunakan where*/
        //$users = DB::table('users')->where('username','dicky')->get();        

        /*untuk memeberhentikan script dan melihat isi Objek*/
        
        //dd($users);

        $blog =Blog::find($id);




        $unescaped = '<script>alert ("tes alert")</script>';

        if(!$blog)
            abort(404);

    	//return view('blog/single',['blog' => $hasil ,'pengguna'=> $users ,'unescaped'=> $unescaped]);

        return view('blog/single',['blog' => $hasil ,'pengguna'=> $users ,'unescaped'=> $unescaped ,'blog' => $blog]);

    }




//buat user
         public function create()
    {
        return view('blog/create');
    }

       public function store(Request $Request)
    {
        //bagian validasi
        $this->validate($Request,[
            'tittle' => 'required|min:5',
            'description' => 'required|min:5|max:25'
            ]);

        $blog = new Blog;
        $blog -> tittle = $Request->tittle;
        $blog -> description = $Request->description;
        $blog -> save();
        return redirect('/blog');
    }
  






     public function edit($id)
    {
         $blog =Blog::find($id);

        if(!$blog)
            abort(404);

        return view('blog/edit', ['blog' =>$blog]);
    }   
     public function update(Request $Request ,$id)
    {
        //return $Request->all();

        //dd($Request);
         //update biasa
        $blog = Blog::find($id);
        $blog->tittle      = $Request->tittle;
        $blog->description = $Request->description;
        $blog->update();

        return redirect('/blog');

        
    }   


    public function destroy($id)
    {
        //softdeletes
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect('/blog');
    }
    
}

