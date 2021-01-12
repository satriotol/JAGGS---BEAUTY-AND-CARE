<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageRequest;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image.index')->with('images',Image::all())->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateImageRequest $request)
    {
        $image = $request->file->store('file');
        Image::create([
            'name' => $request->name,
            'file' => $image,
            'template' => $request->template
        ]);
        session()->flash('success','Image Create Successfully');
        return redirect(route('image.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jumlah = Product::where('image_id','=',$id)->get();
        $count = $jumlah->count();
        return view('image.show',['image' => Image::findOrFail($id)])->with('products',Product::all())->with('count',$count);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $products = $image->products();

        foreach($products->get() as $product){
            $product->delete();
        }
        $products->delete();
        $image->delete();
        return redirect(route('image.index'));
    }
}
;