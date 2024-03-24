<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Images::query()->where('project_id', null)->get();
        $bannerCount = Images::query()->where('project_id', null)->count();
        return view('banners.list', compact('banners', 'bannerCount'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Images $images)
    {
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $pathFile = $image->storeAs('storage/banners', $image->getClientOriginalName(), 'public');
            $image->move(\public_path("storage/banners/"), $image->getClientOriginalName());
            Images::query()->create(
                [
                    'image' => $pathFile,
                    'is_active' => 0,
                    'type' => $extension,
                    'created_at' => $requestData['create_at'],
                    'updated_at' => $requestData['updated_at'],
                ]
            );
            return redirect()->route('banner.index');
        } else {
            return redirect()->route('banner.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Images $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Images $image)
    {
        echo 'check';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $active = Images::query()->where('id', $id)->value('is_active');
        if ($active == 1) {

            Images::query()->where('id', $id)->update([
                'is_active' => 0
            ]);
        } else {

            Images::query()->where('id', $id)->update([
                'is_active' => 1
            ]);
        }
        return redirect()->route('banner.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($image)
    {
        Images::query()->where('id', $image)->delete();
        return redirect()->route('banner.index');
    }
}
