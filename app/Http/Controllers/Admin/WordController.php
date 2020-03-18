<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Word;

class WordController extends Controller
{
    public function add(){
        return view('admin.top');
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
        $news->image_path = basename($path);
      } else {
          $word->image_path = null;
      }
        
        unset($form['_token']);
        unset($form['image']);
        $word->fill($form);
        $word->save();
       return redirect('review/word');
    }
}
