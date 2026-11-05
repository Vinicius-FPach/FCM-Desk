<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('user.careers.index', [
            'careers' => [
                [
                    'id' => 1,
                    'name' => 'Monaco FC'
                ],
                [
                    'id' => 2,
                    'name' => 'Paris FC'
                ]
            ]
        ]);
    }

    public function detail(string $id){
        return view(
            'user.careers.detail',
            [
                'career' => [
                    'id' => 1,
                    'name' => 'Monaco FC'
                ]
            ]
        );
    }

    public function edit(string $id){
        return view(
            'user.careers.edit',
            [
                'career' => [
                    'id' => 1,
                    'name' => 'Monaco FC'
                ]
            ]
        );
    }

    public function update(Request $request){
        if(strlen($request->get("name")) == 0) {
            return redirect()->back()->with('error', 'Erro ao realizar a operação');
        }
        else {
            return redirect()->route('user.careers.index')->with('success', 'sucesso ao realizar a operação!');
        }
    }

    public function create(){}
}
