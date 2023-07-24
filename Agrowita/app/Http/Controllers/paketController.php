<?php

namespace App\Http\Controllers;

use App\Models\paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class paketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = paket::all();
        $data = paket::orderBy('id', 'asc')->get();
        // CHANGED BY FEBRY
        // return view('utility/index_paket')->with('data', $data);

        return view('admin-panels.package-list.index')->with('data', $data);
        // END CHANGED BY FEBRY
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // CHANGED BY FEBRY
        //return view('utility/create');
        return view('admin-panels.package-list.create');
        // END CHANGED BY FEBRY
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_paket', $request->nama_paket);
        Session::flash('harga', $request->harga);
        Session::flash('minimal_p', $request->minimal_p);
        Session::flash('detail', $request->detail);
        Session::flash('id_kategori', $request->id_kategori);

        $request->validate([
            'nama_paket'=>['required', 'max:30'],
            'harga'=>['required', 'integer'],    // required|numeric
            'minimal_p'=>['required', 'integer', 'max:255'],
            'detail'=>['required', 'max:150'],
            'id_kategori'=>['required', 'integer'],
            // 'foto'=>'required'
        ],[
            'nama_paket.max' => 'Maksimal input nama paket 30 kata',
            'harga.integer' => 'Input harga hanya diperbolehkan angka',
            'harga.required' => 'Harap di isi bagian ini',
            'minimal_p.max' => 'Maksimal input minimal pengunjung 255 orang',
            'detail.max' => 'Maksimal input detail 150 kata'
        ]);
        $data = [
            'kegiatan' => $request->input('nama_paket'),
            'harga' => $request->input('harga'),
            'minimal' => $request->input('minimal_p'),
            'detail' => $request->input('detail'),
            // CHANGED BY FEBRY
            // 'status' => $request->input('status'),
            'status' => (!empty($request->input('status')) ? 1 : 0),
            // END CHANGED BY FEBRY
            'id_kategori' => $request->input('id_kategori')
            // 'foto' => $request->input('foto')
        ];

        paket::create($data);
        return redirect('/admin/listpaket');
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
