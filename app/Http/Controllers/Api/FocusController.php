<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\api\FocusRequest;
use App\Models\Focu;
use App\Transformers\FocusTransformer;

class FocusController extends Controller
{
    public function store(FocusRequest $req)
    {
        $focus = ['user_id' => $this->user()->id,'focus_id' => $req->focus_id];
        $res   = Focu::create($focus);
//        return response(['关注成功'])->setStatusCode(201);
//        return $this->response->item($res,new FocusTransformer)->setStatusCode(201);
    }
}
