<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\News;
use Illuminate\Support\Facades\Validator;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor');
    }

    public function store(Request $request)
    {
        $data = News::create($request->all());
        return redirect()->route('news.detail', ['news_id' => $data->id]);
    }

    public function upload(Request $request)
    {
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $validated = Validator::make($request->all(), [
            'upload' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        if ($validated->fails()) {
            $msg = $validated->messages()->first();
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, null, '$msg')</script>";
        } else {
            //$id = $request->get('id') ?? 'draft';
            //$pathId = $request->get('path_id') ?? time();
            //$url = $this->displayImage($this->updateFile($request->file('upload'), '/store/' . $pathId . '/info/' . $id . '/'));
            $url = $this->displayImage($this->updateFile($request->file('upload'), '/store/info/'));
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
        }            // Render HTML output
        @header('Content-type: text/html; charset=utf-8');
        echo $re;
    }

    public function updateFile($file, $folder = 'storage/uploads/')
    {
        $mime = $file->extension();
        $newFileName = $folder . time() . \Illuminate\Support\Str::random(5) . '.' . $mime;
        \Illuminate\Support\Facades\Storage::disk('public')->put('/uploads' . $newFileName, file_get_contents($file), 'public');
        return $newFileName;
    }

    public function displayImage($image)
    {
        if ($image) {
            return '/storage/uploads' . $image;
        }
    }

    public function detailNews($id)
    {
        $detail = News::find($id);
        return  view('news-detail', compact('detail'));
    }

}
