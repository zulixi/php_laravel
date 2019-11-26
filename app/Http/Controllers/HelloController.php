<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request){
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);

        if($validator->fails()){
            $msg = 'クエリに問題があります。';
        }else{
            $msg = 'ID/PASSを受け付けました。';
        }

        return view('index', ['msg' => $msg, ]);
    }

    public function post(HelloRequest $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|bewteen:0,150',
        ]);

        if($validator->fails()){
            return redirect('/hello')->withErrors($validator)->withInput();
        }
        return view('index', ['msg' => '正しく送信されました。']);
    }
}
