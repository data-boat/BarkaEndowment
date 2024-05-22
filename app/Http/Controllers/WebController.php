<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\PagesService;
use App\Models\Objective;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = DB::table('pages_homes')->latest()->first();
        $about = DB::table('pages_about_us')->latest()->first();
        $result = DB::table('pages_results')->latest()->first();
        $service = PagesService::all();
        $objectives = Objective::all();

        $goals = [
        (object)[ 'top' => 1721, 'left' => 740, 'number' => 1, 'title_en' => 'تمكين المجتمع بكافة أطيافه من المساهمة في انشاء المشاريع الوقفية والإشراف عليها وإدارتها وتنميتها بالطرق المثلى لتكون صدقة جارية للواقف' ],
        (object)[ 'top' => 1721, 'left' => 148, 'number' => 2, 'title_en' => 'test' ],
        (object)[ 'top' => 1880, 'left' => 60,  'number' => 4, 'title_en' => 'إدارة واستثمار وإنشاء الأصول الوقفية وتطويرها وتجديد دورها التنموي للانتقال بها من فكرة الإنفاق المباشر إلى ايجاد المصدر المالي المستدام الداعم لمختلف' ],
        (object)[ 'top' => 1880, 'left' => 680, 'number' => 3, 'title_en' => 'إعادة تنظيم الأوقاف القديمة بالولاية وتحديثها والانتقال بها من الإدارة الفردية إلى العمل المؤسسي المتكامل.' ]
    ];

        // $web = Web::all();
        return view('/web', compact('home', 'about', 'result', 'service','objectives','goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Web = Web::all();
        return view('Web', ["Web" => $Web]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Web = new Web();
        $Web->name = $request->input('name');
        $Web->mail = $request->input('mail');
        $Web->subject = $request->input('subject');
        $Web->comment = $request->input('comment');
        $Web->save();
        // alert()->success('Sent!');
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(Web $web, $id)
    {
        $web = Web::find($id);
        return view('/blog', ["pages_home" => $web]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(Web $web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Web $web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(Web $web)
    {
        //
    }
}
