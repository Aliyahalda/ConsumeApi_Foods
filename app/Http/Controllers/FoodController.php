<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class FoodController extends Controller
{
    public function dashboard()
    {
        // $data = (new BaseApi)->index('/api/foods');
        // $foods = $data->json('data');

        // for ($i=1; $i < count($foods); $i++) {
        //     $foods[$i]['image_path'] = env('API_HOST') . 'storage/' . $foods[$i]['image'];
        // }

        // return view('foods.dashboard')->with('foods' , $foods);

        $data = (new BaseApi)->index('/api/foods');
        $foods = $data->json('data');

        for ($i=0; $i < count($foods); $i++) {
            $foods[$i]['image_path'] = env('API_HOST') . 'storage/' . $foods[$i]['image'];
        }

        return view('foods.dashboard')->with('foods' , $foods);
    }

    public function index()
    {
        $data = (new BaseApi)->index('/api/foods');
        $foods = $data->json('data');

        for ($i=0; $i < count($foods); $i++) {
            $foods[$i]['image_path'] = env('API_HOST') . 'storage/' . $foods[$i]['image'];
        }

        return view('foods.index')->with('foods' , $foods);
    }

    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        $upload = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
          ];
      
          $baseApi = new BaseApi;
          $response = $baseApi->create('/api/foods/store', $upload);
          return redirect('/foods');
        }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/foods', $id);
        $foods = $data->json('data');

        for ($i=0; $i < count($foods); $i++) {
            $foods[$i]['image_path'] = env('API_HOST') . 'storage/' . $foods[$i]['image'];
        }
    
    return view('foods.show')->with('foods', $foods);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/foods', $id);
        $foods = $data->json();

        return view('foods.update')->with('foods', $foods['data']);
    }
    
    public function update(Request $request, $id)
    {
        $payload = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
           ];

           $baseApi = new BaseApi;
           $response = $baseApi->update('/api/foods/update',$id, $payload);

           return redirect('/foods')->with('success', 'Berhasil Mengedit Data');

        
    }

    public function destroy($id)
    {
        $data = (new BaseApi)->delete('/api/foods/delete', $id);
        $foods = $data->json();

        return redirect('/foods')->with('success', 'Berhasil Menghapus Data');
    }
}
