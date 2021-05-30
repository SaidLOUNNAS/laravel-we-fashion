<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   // display product
   public function index()
   {
       $products= Product::orderBy('id','DESC')->paginate(6);
       $results= Product::all();
       $counts=$results->count();
     return view('admins.product',compact('products','counts'));

   }

   // product men
   public function ShowMen(){
     $men=DB::table('Products')->where('category_id','=',1)->orderBy('id','DESC')->paginate(6);

     $results=DB::table('Products')->where('category_id','=',1);
     $countMen=$results->count();

     return view('admins.product',['products'=>$men],compact('countMen'));

   }

  //  product women

   public function ShowWomen(){

     $women=DB::table('Products')->where('category_id','=',1)->orderBy('id','DESC')->paginate(6);
     $results=DB::table('Products')->where('category_id','=',1);
     $countWomen=$results->count();

     return view('admins.product',['products'=>$women],compact('countWomen'));

   }


  // // product soldes
   public function ShowProductSolde(){
     $soldes=DB::table('Products')->where('state','=','solde')->orderBy('id','DESC')->paginate(6);
     $results=DB::table('Products')->where('state','=','solde');
     $countSolde=$results->count();
       return view('admins.product',['products'=>$soldes],compact('countSolde'));
   }

  //// display info of products
   public function productDescribe($id){

    $showProduct=Product::find($id);

    return view('admins.ProductDescription',compact('showProduct'));
   }


   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */


   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

}
