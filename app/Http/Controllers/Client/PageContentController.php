<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\blog\Blog;
use App\models\PageContent;
use Session;

class PageContentController extends Controller
{
    public function detail($slug)
    {
        $data['pagecontentdetail'] = PageContent::where(['slug' => $slug])->first();
        $data['bloglq'] = Blog::where(['status' => 1])->limit(6)->get();
        $data['page_related'] = PageContent::where(['status' => 1])->where('id', '!=', $data['pagecontentdetail']->id)->where('type', $data['pagecontentdetail']->type)->get();
        return view('pageContent', $data);
    }
}
