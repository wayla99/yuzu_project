<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdsFormRequest;
use App\Models\Ads;
use App\Models\AdsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $adsType = AdsType::all();

        $id = Auth::user()->id;
        $count = DB::table('ads')
            ->where([
                ['created_by', '=', $id],
            ])
            ->count();
        if ($count != 0){
            $chk_timeline2 = DB::table('ads')->where([
                ['created_by', '=', $id],
                ['status', '=', '0'],
            ])
                ->orderBy('updated_at', 'desc')
                ->get();
            if ($chk_timeline2->count() != 0){
                return view('page.timeline2');
            }else{
                return view('page.ads',compact('adsType'));
            }
        }else{
            return view('page.ads',compact('adsType'));
        }

    }

    public function create(AdsFormRequest $request)
    {
        $data = $request->validated();
        $ads = new Ads;
        if($request->hasfile('file')){
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/file/', $filename);
            $ads->file = $filename;
        }

        $ads->location = $data['location'];
        $ads->ads_type = $data['ads_type'];
        $ads->created_by = Auth::user()->id;
        $ads->save();

        return redirect('timeline1');
    }

    public function timeline1(){
        return view('page.timeline1');
    }

    public function timeline2(){
        return view('page.timeline2');
    }

    public function timeline3(){
        return view('page.timeline3');
    }

    public function ads_status(){
        $id = Auth::user()->id;
        $chk_timeline2 = DB::table('ads')->where([
            ['created_by', '=', $id],
            ['status', '=', '0'],
        ])
            ->orderBy('updated_at', 'desc')
            ->get();

        $chk_timeline3 = DB::table('ads')->where([
            ['created_by', '=', $id],
            ['status', '=', '1'],
        ])
            ->orderBy('updated_at', 'desc')
            ->get();

        if ($chk_timeline2->count() != 0){
            return view('page.timeline2');
        }else if ($chk_timeline3->count() != 0){
            return view('page.timeline3');
        }else{
            return redirect()->back()->with('error', "Not Ads Status");
        }
    }
}
