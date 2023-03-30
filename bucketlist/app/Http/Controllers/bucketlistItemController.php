<?php

namespace App\Http\Controllers;

use App\Models\BucketlistItems;
use App\Models\Bucketlist;
use Illuminate\Http\Request;

class bucketlistItemController extends Controller
{
    public function getCreate()
    {
        $bucketlist = Bucketlist::all();
        return view('bucketlist_item.create')->withBucketlist($bucketlist);
    }

    public function postCreate(Request $request)
    {
        $bucketlist_item = new BucketlistItems();
        $bucketlist_item->title = $request->input('txtName');
        $bucketlist_item->description = $request->input('txtDescription');
        $bucketlist_item->prioriteit = $request->input('selPrioriteit');
        $bucketlist_item->done = ('false');
        $bucketlist_item->bucketlist_id = $request->input('selBucketlist');
        $bucketlist_item->save();
        
        return redirect()->route('bucketlist_item.list');
    }

    public function getList()
    {
        $bucketlist_item = BucketlistItems::all();
        return view('bucketlist_item.list')->withbucketlist_item($bucketlist_item);
    }

    public function getEdit(BucketlistItems $bucketlist_item)
    {
        $bucketlist = Bucketlist::all();
        return view('bucketlist_item.edit')->withbucketlist_item($bucketlist_item)->withBucketlist($bucketlist);
    }

    public function putEdit(Request $request, BucketlistItems $bucketlist_item)
    {
        $bucketlist_item->title = $request->input('txtName');
        $bucketlist_item->prioriteit = $request->input('selPrioriteit');
        $bucketlist_item->done = $request->input('selDone');
        $bucketlist_item->description = $request->input('txtDescription');
        $bucketlist_item->save();
        
        return redirect()->route('bucketlist_item.list');
    }

    public function getDelete(BucketlistItems $bucketlist_item)
    {
        return view('bucketlist_item.delete', ['bucketlist_item' => $bucketlist_item]);
    }

    public function deleteDelete(BucketlistItems $bucketlist_item)
    {
        $bucketlist_item->delete();
        return redirect()->route('bucketlist_item.list');
    }
}
