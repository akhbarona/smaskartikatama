<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\SambutanKepsek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SambutanKepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $SambutanKepsek = SambutanKepsek::where('id', 1)->first();
        return view('menu/sambutan/kepsek', compact('SambutanKepsek'));
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
        $rules = [
            'deskripsi-kepsek' => 'nullable|string',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->with(['message' => 'gagal menambahkan data.', 'hasError' => true])->withErrors($validator)->withInput();
        }
        $validator = $validator->validated();
        if (trim($validator['deskripsi-kepsek']) === '<p></p>') {
            $validator['deskripsi-kepsek'] = null;
        }
        SambutanKepsek::updateOrCreate(['id' => 1], [
            'id' => 1,
            'deskripsi' => $validator['deskripsi-kepsek'],
        ]);

        return redirect()->route('kelola-sambutan-kepsek.index')->with(['message' => 'sukses menambahkan data.', 'hasError' => false]);
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