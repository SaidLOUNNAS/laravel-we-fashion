<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */


  // Dispaly all product
  public function index()
  {
    $shops = Product::paginate(6);
    return view('admin', compact('shops'));

  }

  // form create product
  public function create(){
    return view('admins.create');
  }


  // find data user insert
  public function store(Request $request)
  {
    $request->validate([
      'name'=>'required',
      'price'=>'required',
      'description'=>'required',
      'size'=>'required',
      'reference'=>'required',
      'state'=>'required',


    ]);

    $addProduct= new Product;

    //recover data entered by user
    $addProduct->name=$request->input('name');
    $addProduct->description=$request->input('description');
    $addProduct->price=$request->input('price');

    $addProduct->size=$request->input('size');
    $addProduct->is_visible=$request->input('status');
    $addProduct->reference=$request->input('reference');


    $addProduct->state=$request->input('state');

    $addProduct->category_id=$request->input('category_id');



    if($request->hasfile('image')){

      $file=$request->file('image');

      $extension=$file->getClientOriginalExtension();

      $filename=time().'.'.$extension;

      $file->move('images',$filename);

      $addProduct->image=$filename;
    }

    $addProduct->save();
    // return admin when success
    return redirect('/admin')->with('success','data saved');
  }

  // form edite data
  public function edit($id)
  {
    $editProduct = Product::find($id);
    $editCategory=Category::find($id);


    return view('admins.edit', compact('editProduct','editCategory'));


  }



//   update data
  public function update(Request $request, $id)
  {
    $request->validate([
      'name'=>'required',
      'price'=>'required',
      'description'=>'required',
      'state'=>'required',



    ]);

    $editProduct=Product::find($id);


  // recover data entered by user
    $editProduct->name=$request->input('name');
    $editProduct->description=$request->input('description');
    $editProduct->price=$request->input('price');
    $editProduct->description=$request->input('description');

    $editProduct->state=$request->input('state');

    $editProduct->category_id=$request->input('category_id');

    $editProduct->save();

    return redirect('/admin')->with('success', 'updated!');
  }

  public function destroy($id)
  {

    $deleteProduct = Product::find($id);
    $deleteProduct->delete();

    return redirect('/admin')->with('success', 'product deleted!');

  }

// get => display all info category
  public function getCategory()

  {
    $categories = Category::paginate(6);

    return view('admin', ['shops'=>$categories]);

  }


  // form category
  public function createCategory()
  {
    return view('admins.createCategory');
  }


  // recover data entered by user
  public function storeCategory(Request $request)
  {
    $storeCategory= new Category;

    $storeCategory->name=$request->input('category');
    $storeCategory->save();
    return redirect('/category')->with('success','Category was created!');
  }

  // edit form
  public function editCategory($id)
  {
    $showCategory=Category::find($id);
    $categories=Category::find($id);
    return view('admins.editCategory',compact('showCategory','categories'));
  }

//  update
  public function updateCategory(Request $request, $id)

  {
    // recover data entered by user
    $categories= Category::find($id);
    $categories->name=$request->input('category');
    $categories->save();

    return redirect('/category')->with('success', 'Category updated ');
  }

//   delete category
  public function destroyCategory($id)
  {
    $deletedCategory = Category::find($id);
    $deletedCategory->delete();

    return redirect('/category')->with('success', 'product deleted!');
  }


}
