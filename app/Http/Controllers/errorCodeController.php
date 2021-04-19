<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use App\errorCodes;
use App\article;

class errorCodeController extends Controller
{

    private $errorCode;
    private $article;

    function __construct(errorCodes $errorCode, article $article)
    {
        $this->errorCode = $errorCode;
        $this->article = $article;
    }

    public function index(Request $request)
    {
        $searchWord = $request->get('searchWord');
        $searchWords = $this->extractKeywords($searchWord);

        $errors = $this->errorCode->search($searchWords);
        $article = $this->article->search($searchWords);

        return view('errorCode.index', compact('errors', 'searchWord', 'article'));
    }

    public function create()
    {
        return view('errorCode.create');
    }

    public function store(Request $request)
    {
        $savedata = $request->all();
        $this->errorCode->fill($savedata)->save();

        return View('CodeBase');
    }

    public function edit($id)
    {
        $editData = $this->errorCode->find($id);
        return view('errorCode.edit', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->errorCode->find($id)->fill($input)->save();
        return view('CodeBase');
    }

    public function destroy($id)
    {
        $this->errorCode->find($id)->delete();
        return view('CodeBase');
    }

    private function extractKeywords(string $input, int $limit = -1): array
    {
        return preg_split('/[\p{Z}\p{Cc}]++/u', $input, $limit, PREG_SPLIT_NO_EMPTY);
    }
}
