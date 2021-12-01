<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Transfer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = Transfer::with(['user', 'asset'])->get();
        return view('pages.admin.transfer.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::where('user_id', Auth::user()->id)->get();
        $users = User::where('id', '!=', Auth::user()->id)->get();

        return view('pages.admin.transfer.create', compact('assets', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'asset_id' => 'required',
            'user_id' => 'required',
            'reason' => 'required|min:5|max:50',
        ]);

        Transfer::create($attr);

        return redirect()->route('transfer.index')->with('success', "New Request successfully added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        $transfer->delete();

        return redirect()->route('transfer.index')->with('success', "Requets successfully deleted");
    }

    public function setStatus(Request $request, $id) 
    {   
        $request->validate([
            'status' => 'required',
        ]);

        $item = Transfer::findOrFail($id);
        $item->status = $request->status;
        $item->save();

        return redirect()->route('transfer.index')->with('success', 'Change status success');;
    }
}
