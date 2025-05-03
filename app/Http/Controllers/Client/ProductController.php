<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product\Product;
use App\models\product\Category;
use App\models\blog\Blog;
use App\models\product\TypeProduct;
use App\models\construction\Construction;
use  App\models\product\TypeProductTwo;
use App\models\website\Faq;
use App\models\website\Prize;
use Session;

class ProductController extends Controller
{
    public function allProduct()
    {
        $data['list'] = Product::where('status',1)->orderBy('id','DESC')->select('id','category','name','discount','price','images','slug','cate_slug','type_slug')
        ->paginate(12);
        $data['title'] = "Tất cả sản phẩm";
        $data['content'] = 'none';
        return view('product.list',$data);
    }
    public function allListCate($danhmuc)
    {

        if($danhmuc == "tat-ca"){
            $data['list'] = Product::where('status',1)->orderBy('id','DESC')->select('id','category','name','discount','price','images','slug','description')
            ->paginate(21);
            $data['title'] = "Tất cả sản phẩm";
            $data['content'] = 'none';
        }else{
            $data['list'] = Product::where(['status'=>1,'cate_slug'=>$danhmuc])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description')
            ->paginate(21);
            $data['cateno'] = Category::where('slug',$danhmuc)->first(['id','name','avatar','content']);
            $data['hastagType'] = TypeProduct::where(['status'=>1,'cate_id'=>$data['cateno']->id])->orderBy('id','DESC')
            ->get(['slug','id', 'name','cate_slug']);
            $cate_id = $data['cateno']->id;
            $data['title'] = languageName($data['cateno']->name);
            $data['content'] = $data['cateno']->content;
        }
        return view('product.list',$data);
    }
    public function allListType($danhmuc,$loaidanhmuc){
        $data['list'] = Product::where(['status'=>1,'cate_slug'=>$danhmuc,'type_slug'=>$loaidanhmuc])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description')
            ->paginate(21);
        $data['type'] = TypeProduct::where('slug',$loaidanhmuc)->first(['id','name','cate_id','content']);
        $cate_id = $data['type']->cate_id;
        $data['typeCate'] = TypeProduct::where([
            ['status', '=', 1],
            ['cate_id', '=',$cate_id]
        ])->orderBy('id','DESC')
        ->get(['cate_id','id', 'name','avatar']);
        $data['hastagType'] = TypeProduct::where(['status'=>1,'cate_id'=>$cate_id])->orderBy('id','DESC')
        ->get(['slug','id', 'name','cate_slug']);
        $data['title'] = languageName($data['type']->name);
        $data['content'] = $data['type']->content;
        return view('product.list',$data);
    }
    public function allListTypeTwo($danhmuc,$loaidanhmuc,$thuonghieu){
        $data['list'] = Product::where(['status'=>1,'cate_slug'=>$danhmuc,'type_slug'=>$loaidanhmuc,'type_two_slug'=>$thuonghieu])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description')
            ->paginate(12);
        $data['type'] = TypeProductTwo::where('slug',$thuonghieu)->first(['id','name','cate_id','content']);
        // $cate_id = $data['type']->cate_id;
        // $data['typeCate'] = TypeProduct::where([
        //     ['status', '=', 1],
        //     ['cate_id', '=',$cate_id]
        // ])->orderBy('id','DESC')
        // ->get(['cate_id','id', 'name','avatar']);
        $data['title'] = languageName($data['type']->name);
        $data['content'] = $data['type']->content;
        return view('product.list',$data);
    }
    public function CateProList($cate)
    {
        $data['list'] = Product::with('customer','cate')
        ->where('category',$cate)
        ->orderBy('id','ASC')
        ->paginate(12);
        $data['cate'] = Category::where('id',$cate)->first();
        return view('product.list',$data);
    }
    public function TypeProList($type)
    {
        $data['list'] = Product::with('customer','cate')
        ->where('type_cate',$type)
        ->orderBy('id','ASC')
        ->paginate(12);
        $cate = TypeProduct::where('id',$type)->first();
        $data['title_page'] = languageName($cate->name);
        return view('product.list',$data);
    }

    public function getproajax(Request $request)
    {
        if($request->cate == "all"){
            $products = Product::where([
                ['status', '=', 1]
            ])->limit(9)->orderBy('id','ASC')->get(['id','name','discount','price','images']);
        }else{
            $products = Product::where(['status'=>1,'category'=>$request->cate])
            ->with(['product_options' => function ($q) {
                $q->select('product_id', \DB::raw('MIN(price_usd) as min_price_usd'), \DB::raw('MIN(price_vnd) as min_price_vnd'))
                    ->groupBy('product_id');
            }])
            ->get();
            foreach ($products as $product) {
                $option = $product->product_options->first();
                $product->min_price_usd = $option->min_price_usd ?? 0;
                $product->min_price_vnd = $option->min_price_vnd ?? 0;
                unset($product->product_options); // nếu muốn bỏ mảng gốc
            }
        }
        $view = view("layouts.product.getproajax",compact('products'))->render();
        return response()->json(['html'=>$view]);
    }

    public function filterProduct(Request $request)
    {
        $product = Product::query();
        if(isset($request->param)){
            if($request->param == 'discount'){
                if(!empty($request->typecate)){
                    $product = $product->where('status',1)->where('type_cate',$request->typecate)->orderBy('discount','DESC');
                }else{
                    $product = $product->where('status',1)->where('category',$request->cate)->orderBy('discount','DESC');
                }

            }elseif($request->param == 'price-desc'){
                if(!empty($request->typecate)){
                    $product = $product->where('status',1)->where('type_cate',$request->typecate)->orderBy('price','DESC');
                }
                else{
                    $product = $product->where('status',1)->where('category',$request->cate)->orderBy('price','DESC');
                }

            }elseif($request->param == 'price-asc'){
                if(!empty($request->typecate)){
                    $product = $product->where('status',1)->where('type_cate',$request->typecate)->orderBy('price','ASC');
                }
                else{
                    $product = $product->where('status',1)->where('category',$request->cate)->orderBy('price','ASC');
                }

            }
        }
        $product = $product->get();
        $view = view("layouts.product.filter",compact('product'))->render();

        return response()->json(['html'=>$view]);
    }
    public function detail_product($slug)
    {
        $data['product'] = Product::with([
            'typeCate' => function ($query) {
                $query->select('id', 'name','avatar','slug');
            },
            'cate' => function ($query) {
                $query->where('status',1)->limit(5)->select('id','name','avatar','slug');
            },
            'product_options'
        ])->where('slug',$slug)->first(['id','name','images','category','sku','content','description','created_at', 'type_slug', 'type_cate', 'price', 'slug']);
        $data['productlq'] = Product::where('category',$data['product']->category)->where('status',1)->where('id','!=',$data['product']->id)->get(['id','name','images','discount','price','slug','cate_slug','type_slug','description']);
        $data['prizes'] = Prize::where(['status'=>1])->get();
        $data['faqs'] = Faq::where(['status'=>1])->get();
        return view('product.detail',$data);
    }
    public function compare(Request $request)
    {
//         $request->session()->flush();
// return;
        $id = $request->id;
        $data['product'] = Product::where('id',$id)->first(['id','name','images','category','discount','price','size']);
        $compare = session()->get('compareProduct', []);
        if(isset($compare[$id])) {
            session()->put('compareProduct', $compare);
            return response()->json([
                'message' => 'exist'
            ]);
        }
        else {
            if(empty($compare)){
                $compare[$id] = [
                    "idpro" => $id,
                    "name" => $data['product']->name,
                    "cate" => $data['product']->category,
                    "discount" => $data['product']->discount,
                    "price" => $data['product']->price,
                    "size" => $data['product']->size,
                    "image" => json_decode($data['product']->images)[0]
                ];
            }else{
                foreach($compare as $val){
                    if($data['product']->category != $val['cate']){
                        return response()->json([
                            'data'=> [],
                            'message' => 'error'
                        ]);
                    }
                }
                if(count($compare) == 3){
                    return response()->json([
                        'data'=> [],
                        'message' => 'limit3'
                    ]);
                }
                $compare[$id] = [
                    "idpro" => $id,
                    "name" => $data['product']->name,
                    "cate" => $data['product']->category,
                    "discount" => $data['product']->discount,
                    "price" => $data['product']->price,
                    "size" => $data['product']->size,
                    "image" => json_decode($data['product']->images)[0]
                ];
            }
            session()->put('compareProduct', $compare);
            $compareProduct = session()->get('compareProduct', []);

            return response()->json([
                'data'=> $compareProduct,
                'qty'=> count($compareProduct),
                'message' => 'success'
            ]);

        }

    }
    public function removeCompare(Request $request)
    {
        if($request->id) {
            $compare = session()->get('compareProduct');
            if(isset($compare[$request->id])) {
                unset($compare[$request->id]);
                session()->put('compareProduct', $compare);
            }
            $list = session()->get('compareProduct', []);
            $view = view("layouts.product.compare",compact('list'))->render();
            return response()->json(['html'=>$view]);
        }


    }
    public function compareList()
    {
        $data['list'] = session()->get('compareProduct', []);
        return view('compare.product',$data);
    }
    public function search_product(Request $request)
    {
        $language_current = Session::get('locale');
        $keyword = $request->keyword;
         $data['product'] = Product::where(['language'=>$language_current])
         ->where('name', 'LIKE', '%'.$keyword.'%')
         ->paginate(12);
         return view('product.search',$data);
    }

    public function brandStory($slug)
    {
        $data['brand'] = Category::where('slug',$slug)->first(['id','name','imagehome','content', 'description']);
        $data['title'] = languageName($data['brand']->name);
        $data['content'] = languageName($data['brand']->content);
        $data['description'] = languageName($data['brand']->description);
        return view('brand-story',$data);
    }
}
