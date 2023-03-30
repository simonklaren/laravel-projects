<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use Illuminate\Http\Request;

class bucketlistController extends Controller
{
    public function getCreate()
    {
        return view('bucketlist.create');
    }

    public function postCreate(Request $request)
    {
        $bucketlist = new Bucketlist();
        $bucketlist->title = $request->input('title');
        $bucketlist->save();
        return redirect()->route('bucketlist.list');
    }

    public function getList()
    {
        $bucketlist = Bucketlist::all();
        return view('bucketlist.list')->withBucketlist($bucketlist);
    }

    public function getEdit(Bucketlist $bucketlist)
    {
        return view('bucketlist.edit')->withBucketlist($bucketlist);
    }

    public function putEdit(Request $request, Bucketlist $bucketlist)
    {
        $bucketlist->title = $request->input('title');
        $bucketlist->save();
        return "GELUKT!";
    }

    public function getDelete(Bucketlist $bucketlist)
    {
        // return view('category.delete')->withCategory($category);
        return view('bucketlist.delete', ['bucketlist' => $bucketlist]);
    }

    public function deleteDelete(Bucketlist $bucketlist)
    {
        $bucketlist->delete();
        return redirect()->route('bucketlist.list');
    }
}
