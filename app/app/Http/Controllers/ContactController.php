<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact_form');
    }

    public function confirm(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
    //    // $request->validate([
    //      //   'name' => 'required',
    //         'email' => 'required',
    //         'phone'  => 'required',
    //         'gender'  => 'required',
    //         'image'  => 'required',
    //         'phone'  => 'required',
    //         'message'  => 'required',
    //     ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contact_confirm', [
            'inputs' => $inputs,
        ]);

        var_dump($inputs['name']);
        var_dump($inputs['gender']);
    }

    public function complete(Request $request)
    {
        return view('contact_complete');
    }
}

