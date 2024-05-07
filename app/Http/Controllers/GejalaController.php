<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class GejalaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:gejala-list', ['only' => ['index']]);
        $this->middleware('permission:gejala-create', ['only' => ['store']]);
        $this->middleware('permission:gejala-edit', ['only' => ['update', 'json']]);
        $this->middleware('permission:gejala-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $gejala = Gejala::orderBy('kode', 'asc')->paginate(10);
        $lastCode = $this->generateCode(Gejala::orderBy('kode', 'desc')->first());
        $gejalaDauns = Gejala::where('kategori', 'daun')->paginate(10);
        $gejalaBatangs = Gejala::where('kategori', 'batang')->paginate(10);
        return view('admin.gejala.index', compact('gejala', 'lastCode', 'gejalaDauns', 'gejalaBatangs'));
    }

    private function generateCode($lastCodeGejala)
    {
        $prefix = 'G';
        $lastCode = $lastCodeGejala ? $lastCodeGejala->kode : 'G001';
        $lastCode = str_replace($prefix, '', $lastCode);
        $lastCode = str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT); // 049
        $lastCode = $prefix . $lastCode; // G049

        return $lastCode;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:gejalas,nama',
            'kategori' => 'required',
            'image' => 'required',
        ]);

        $data = $request->all();
        $data['kode'] = $this->generateCode(Gejala::orderBy('kode', 'desc')->first());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/gejala', $fileName);
            $data['image'] = $fileName;
        }
        Gejala::create($data);
        return back()->with('success', 'Data gejala berhasil disimpan');
    }

    public function json()
    {
        $data = Gejala::find(request('id'));

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:gejalas,nama,' . $request->id,
            'kategori' => 'required',
        ]);

        $gejala = Gejala::findOrFail($request->id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            Storage::delete('public/gejala/' . $gejala->image);
            $fileName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/gejala', $fileName);
            $data['image'] = $fileName;
        }
        $gejala->update($data);
        return back()->with('success', 'Data gejala berhasil diubah');
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return back()->with('success', 'Data gejala berhasil dihapus');
    }
}
