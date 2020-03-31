<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Word;

class WordController extends Controller
{
    public function add(){
        $words=Word::all();
        return view('admin.top',['words'=>$words]);
    }
    public function search(){
        return view('admin.search');
    }
    public function word(){
        return view('admin.word');
    }
    public function mypage(){
        return view('admin.mypage');
    }
    public function create(Request $request){
        $this->validate($request, Word::$rules);
        $word = new Word;
        $form = $request->all();
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $word->image_path = basename($path);
      } else {
          $word->image_path = null;
      }
        
        unset($form['_token']);
        unset($form['image']);
        $word->fill($form);
        $word->save();
       return redirect('review/word');
    }
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Word::where('title', $cond_title)->get();
      } else {
          $posts = Word::all();
      }
      return view('admin.search', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
}
