<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Zend\Diactoros\Request;
use Illuminate\Support\Facades\View;

class LoadDataController extends Controller {

    

    public function index(){
        return \view('LoadData.index');
    }

    public function loadData(Request $request){
        //return View('loadData.index');
        $client = new GuzzleHttp.Client();

        $res = $client->request('GET','http://10.10.15.815:8112'.[
                'hea'
            ]);

        return redirect('room')->with('status','berhasil');

    }

    private function loadToken(){
        $token = "";

        return $token;
    }

}