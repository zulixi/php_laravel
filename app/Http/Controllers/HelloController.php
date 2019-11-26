<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        $data = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachico@happy']
        ];

//        return view('index', ['data' => $data]);
//        return view('index', ['message' => "Hello!"]);
//        return view('index', ['data' => $request->data]);
//        return view('index');
        return view('index', ['msg' => 'フォームを入力:']);
    }

    public function post(Request $request){
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request, $validate_rule);
        return view('index', ['msg' => '正しく送信されました。']);
    }
}
