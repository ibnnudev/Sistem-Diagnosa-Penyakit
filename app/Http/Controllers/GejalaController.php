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
            'sy_pic' => 'required',
            'y_pic' => 'required',
            'cy_pic' => 'required',
            'ky_pic' => 'required',
            'tt_pic' => 'required',
            'ty_pic' => 'required',
        ]);

        $data = $request->all();
        $data['kode'] = $this->generateCode(Gejala::orderBy('kode', 'desc')->first());

        $fileNameSy = uniqid() . '.' . $request->sy_pic;
        $request->sy_pic->storeAs('public/gejala', $fileNameSy);

        $fileNameY = uniqid() . '.' . $request->y_pic;
        $request->y_pic->storeAs('public/gejala', $fileNameY);

        $fileNameCy = uniqid() . '.' . $request->cy_pic;
        $request->cy_pic->storeAs('public/gejala', $fileNameCy);

        $fileNameKy = uniqid() . '.' . $request->ky_pic;
        $request->ky_pic->storeAs('public/gejala', $fileNameKy);

        $fileNameTt = uniqid() . '.' . $request->tt_pic;
        $request->tt_pic->storeAs('public/gejala', $fileNameTt);

        $fileNameTy = uniqid() . '.' . $request->ty_pic;
        $request->ty_pic->storeAs('public/gejala', $fileNameTy);

        $data['sy_pic'] = $fileNameSy;
        $data['y_pic'] = $fileNameY;
        $data['cy_pic'] = $fileNameCy;
        $data['ky_pic'] = $fileNameKy;
        $data['tt_pic'] = $fileNameTt;
        $data['ty_pic'] = $fileNameTy;

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
            'sy_pic' => 'required',
            'y_pic' => 'required',
            'cy_pic' => 'required',
            'ky_pic' => 'required',
            'tt_pic' => 'required',
            'ty_pic' => 'required',
        ]);

        $gejala = Gejala::where('id', $request->id)->where('nama', $request->nama)->first();
        $data = $request->all();

        if ($gejala->sy_pic == null) {
            $fileNameSy = uniqid() . '.' . $request->file('sy_pic')->getClientOriginalExtension();
            $request->file('sy_pic')->storeAs('public/gejala', $fileNameSy);
            $data['sy_pic'] = $fileNameSy;
        } else {
            Storage::delete('public/gejala/' . $gejala->sy_pic);
            $fileNameSy = uniqid() . '.' . $request->file('sy_pic')->getClientOriginalExtension();
            $request->file('sy_pic')->storeAs('public/gejala', $fileNameSy);
            $data['sy_pic'] = $gejala->sy_pic;
        }

        if ($gejala->y_pic == null) {
            $fileNameY = uniqid() . '.' . $request->file('y_pic')->getClientOriginalExtension();
            $request->file('y_pic')->storeAs('public/gejala', $fileNameY);
            $data['y_pic'] = $fileNameY;
        } else {
            Storage::delete('public/gejala/' . $gejala->y_pic);
            $fileNameY = uniqid() . '.' . $request->file('y_pic')->getClientOriginalExtension();
            $request->file('y_pic')->storeAs('public/gejala', $fileNameY);
            $data['y_pic'] = $gejala->y_pic;
        }

        if ($gejala->cy_pic == null) {
            $fileNameCy = uniqid() . '.' . $request->file('cy_pic')->getClientOriginalExtension();
            $request->file('cy_pic')->storeAs('public/gejala', $fileNameCy);
            $data['cy_pic'] = $fileNameCy;
        } else {
            Storage::delete('public/gejala/' . $gejala->cy_pic);
            $fileNameCy = uniqid() . '.' . $request->file('cy_pic')->getClientOriginalExtension();
            $request->file('cy_pic')->storeAs('public/gejala', $fileNameCy);
            $data['cy_pic'] = $gejala->cy_pic;
        }

        if ($gejala->ky_pic == null) {
            $fileNameKy = uniqid() . '.' . $request->file('ky_pic')->getClientOriginalExtension();
            $request->file('ky_pic')->storeAs('public/gejala', $fileNameKy);
            $data['ky_pic'] = $fileNameKy;
        } else {
            Storage::delete('public/gejala/' . $gejala->ky_pic);
            $fileNameKy = uniqid() . '.' . $request->file('ky_pic')->getClientOriginalExtension();
            $request->file('ky_pic')->storeAs('public/gejala', $fileNameKy);
            $data['ky_pic'] = $gejala->ky_pic;
        }

        if ($gejala->tt_pic == null) {
            $fileNameTt = uniqid() . '.' . $request->file('tt_pic')->getClientOriginalExtension();
            $request->file('tt_pic')->storeAs('public/gejala', $fileNameTt);
            $data['tt_pic'] = $fileNameTt;
        } else {
            Storage::delete('public/gejala/' . $gejala->tt_pic);
            $fileNameTt = uniqid() . '.' . $request->file('tt_pic')->getClientOriginalExtension();
            $request->file('tt_pic')->storeAs('public/gejala', $fileNameTt);
            $data['tt_pic'] = $gejala->tt_pic;
        }

        if ($gejala->ty_pic == null) {
            $fileNameTy = uniqid() . '.' . $request->file('ty_pic')->getClientOriginalExtension();
            $request->file('ty_pic')->storeAs('public/gejala', $fileNameTy);
            $data['ty_pic'] = $fileNameTy;
        } else {
            Storage::delete('public/gejala/' . $gejala->ty_pic);
            $fileNameTy = uniqid() . '.' . $request->file('ty_pic')->getClientOriginalExtension();
            $request->file('ty_pic')->storeAs('public/gejala', $fileNameTy);
            $data['ty_pic'] = $gejala->ty_pic;
        }

        Gejala::find($request->id)->update($data);

        return back()->with('success', 'Data gejala berhasil diubah');
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return back()->with('success', 'Data gejala berhasil dihapus');
    }
}
