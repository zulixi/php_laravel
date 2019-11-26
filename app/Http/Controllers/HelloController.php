<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

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

    public function post(HelloRequest $request){
        return view('index', ['msg' => '正しく送信されました。']);
    }
}
