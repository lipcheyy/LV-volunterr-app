<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Donation\StoreRequest;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(StoreRequest $request){
        $data=$request->validated();
        $data['user_id']=auth()->user()->id;
        Donation::create($data);
    }
}