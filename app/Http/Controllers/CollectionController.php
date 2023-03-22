<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Resources\ResponseResource;
use App\Models\CollectionTag;
use App\Models\Tag;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ResponseResource(Collection::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->name = $request->get('name');
        $collection->url_thumbnail = $request->get('url_thumbnail');
        $collection->hearts = $request->get('hearts');
        $collection->views = $request->get('views');

        $collection->save();

        $tags = $request->get('tags');
        foreach ($tags as $item) {
            $collectionTag = new CollectionTag();
            $collectionTag->id_collection = $collection->id;
            $collectionTag->id_tag = $item;
            $collectionTag->save();
        }


        return new ResponseResource($tags);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
