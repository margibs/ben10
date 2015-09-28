<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

use App\PluginModel\RateCategory;
use App\PluginModel\RateItem;

class RateController extends Controller
{
    //Backend
    public function categories()
    {
    	$categories = RateCategory::where('parent_id',0)->paginate(10);

    	foreach ($categories as $category) {
    		$category->sub_categories = RateCategory::where('parent_id',$category->id)->get();
    	}

    	$categoriesAll = RateCategory::where('parent_id','=',0)->get();
    	$category_select = ['0' => 'none'];
    	foreach ($categoriesAll as $category2) {
    		$category_select[$category2->id] = $category2->name;
    	}

    	// dd($category_select);


    	return view('plugin.rate.categoryLinks',compact(['categories','category_select']));
    }

    public function addCategories(Request $request)
    {
    	$rateCategory = new RateCategory;

    	$rateCategory->name = $request->input('name');
        $rateCategory->slug = $this->getCategorySlug($request->input('name'));
        $rateCategory->parent_id = $request->input('parent_id');
        $rateCategory->save();

        return  redirect('plugin/rate/categories');
    }

    public function items($approved)
    {
        if($approved == 4)
        {
            $products = RateItem::all();
        }
        elseif($approved == 0)
        {
            $products = RateItem::where('category_id',10)->where('approved',$approved)->get();
        }
        else
        {
            $products = RateItem::where('approved',$approved)->get();
        }
       
        return view('plugin.rate.itemLists',compact('products'));
    }

    public function itemApprove($approved,$item_id)
    {
        $products = RateItem::find($item_id);
        $products->approved = $approved;
        $products->save();

        return redirect('plugin/rate/items');
    }

    public function ajaxCheckProduct()
    {
        $product_count = RateItem::where('category_id',10)->where('approved',0)->count();
        return $product_count;
    }

   	public function getCategorySlug($value, $slug_check = false)
    {
        if (!$slug_check)
        {
            $slug = Str::slug($value);
        }
        else
        {
            $slug = $value;
        }
        

        if($slug == 'new')
        {
            $slug = 'new_0';
        }
   
        $slugCount = (RateCategory::where('slug','like',$slug.'%')->count()); 

        if ($slugCount >0)
        {
            $slugCount ++;
            return  $slug.'-'.($slugCount);
        }
        else
        {
            return $slug;
        }

    }
}
