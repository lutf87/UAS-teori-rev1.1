<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kategori $kategori, Request $request)
    {
        $datas = Kategori::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.pages.kategori.index', compact('datas', 'kategori'))->with('no', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_kategori' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kode_kategori' => 'required',
            'nama_kategori' => 'required',
        ]);

        // up image
        $image = $request->file('foto_kategori');
        $image->storeAs('public/posts', $image->getClientOriginalName());

        Kategori::create([
            'foto_kategori' => $image->getClientOriginalName(),
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori
        ]);

        //redirect to index

        if (!$request) {
            return redirect()->route('admin.pages.kategori.create')->with(['error' => 'Data gagal disimpan!']);
        } else {
            return redirect()->route('kategori.index')->with(['success' => 'Data berhasil disimpan!']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
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
    public function update(Request $request, Kategori $kategori)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
