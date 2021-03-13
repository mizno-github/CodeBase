<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use App\errorCodes;
use App\article;

class errorCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $errorCode;
    public $article;

    function __construct(errorCodes $errorCode, article $article)
    {
        $this->errorCode = $errorCode;
        $this->article = $article;
    }

    public function index(Request $request)
    {
        // 将来的にはここに検索wordを置く
        // $errors = $this->errorCodes->all();
        $searchWord = $request->get('searchWord');

        $errors = $this->errorCode->where('title', 'like', '%'. $searchWord. '%')
                                   ->orWhere('errorCode', 'like', '%'. $searchWord. '%')
                                   ->orWhere('lang', 'like', '%'. $searchWord. '%')
                                   ->orWhere('solution', 'like', '%'. $searchWord. '%')
                                   ->orWhere('detailed', 'like', '%'. $searchWord. '%')
                                   ->orWhere('assistance', 'like', '%'. $searchWord. '%')
                                   ->get();

        $article = $this->article->where('title', 'like', '%'. $searchWord. '%')
                                 ->orWhere('lang', 'like', '%'. $searchWord. '%')
                                 ->orWhere('problem', 'like', '%'. $searchWord. '%')
                                 ->orWhere('assistance', 'like', '%'. $searchWord. '%')
                                 ->get();
        return view('errorCode.index', compact('errors', 'searchWord', 'article'));
    }
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('errorCode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $savedata = $request->all();
        $store = $this->errorCode->fill($savedata)->save();

        return View('CodeBase');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData = $this->errorCode->find($id);
        return view('errorCode.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->errorCode->find($id)->fill($input)->save();
        return view('CodeBase');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->errorCode->find($id)->delete();
        return view('CodeBase');
    }
}
