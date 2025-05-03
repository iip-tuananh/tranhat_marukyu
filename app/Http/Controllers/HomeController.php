<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\CarType;
use App\models\ReviewCus;
use App\models\PageContent;
use App\models\product\TypeProduct;
use App\models\Project;
use App\models\website\Faq;
use App\models\website\Prize;
use App\models\website\Video;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $data['hotBlogs'] = Blog::with('cate')->where([
            ['status','=',1],
            ['home_status','=',1]
        ])->orderBy('id','DESC')->get(['id','title','slug','created_at','image','description','category']);

        $data['gioithieu'] = PageContent::where('status',1)->where('language', 'vi')->where(function($query){
            $query->where('slug','gioi-thieu')->orWhere('quiz_id',1);
        })->first(['id','title','description','image', 'slug']);
        $data['history'] = PageContent::where(['type'=>'ve-chung-toi','language'=>'vi'])->where('status',1)->where('quiz_id','=',2)->first(['id','title','content','image', 'description', 'slug']);
        $data['quality'] = PageContent::where(['type'=>'ve-chung-toi','language'=>'vi'])->where('status',1)->where('quiz_id','=',3)->first(['id','title','content','image', 'description', 'slug']);
        $data['whychooseus'] = PageContent::where(['type'=>'ve-chung-toi','language'=>'vi'])->where('status',1)->where('quiz_id','=',4)->first(['id','title','content','image', 'description', 'slug']);
        $data['partners'] = Partner::where(['status'=>1])->get();
        $data['reviewcus'] = ReviewCus::where(['status'=>1])->get();
        $data['prizes'] = Prize::where(['status'=>1])->get();
        $data['faqs'] = Faq::where(['status'=>1])->get();
        $categories = Category::with(['product' => function ($query) {
            $query->where('status', 1);
        }])->where('status', 1)->orderBy('id','DESC')->get();

        $data['categories'] = $categories;
        $data['typeProducts'] = TypeProduct::query()->with('category')->where('home_status', 1)->where('status', 1)->orderBy('id','DESC')->get();
        $data['video'] = Video::where('status', 1)->orderBy('id','DESC')->first();
        return view('home',$data);
    }
}
