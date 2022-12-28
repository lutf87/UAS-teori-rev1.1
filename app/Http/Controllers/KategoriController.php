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
            'foto'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama'     => 'required',
            'kode'   => 'required',
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/posts/kategori', $image->getClientOriginalName());

        //create post
        Kategori::create([
            'nama'     => $request->nama,
            'foto'     => $image->getClientOriginalName(),
            'kode'   => $request->kode
        ]);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);

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
        return view('admin.pages.kategori.edit', compact('kategori'));
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
        $this->validate($request, [
            'foto'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama'     => 'required',
            'kode'   => 'required'
        ]);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $image = $request->file('foto');
            $image->storeAs('public/posts/kategori', $image->getClientOriginalName());

            //delete old image
            Storage::delete('public/posts/kategori/'.$kategori->image);

            //update post with new image
            $kategori->update([
                'foto'     => $image->getClientOriginalName(),
                'nama'     => $request->nama,
                'kode'   => $request->kode
            ]);

        } else {

            //update post without image
            $kategori->update([
                'nama'     => $request->nama,
                'kode'   => $request->kode
            ]);
        }

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
                Storage::delete('public/posts/'. $kategori->foto);
                $kategori->delete();
                return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
