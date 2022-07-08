<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
        $obats = Obat::with('kategoris')->get();
        return view('admin.obat.index', ['obats' => $obats]);
    }

    public function create(){
        $kategoris=Kategori::all();
        return view('admin.obat.create', ['kategoris' => $kategoris]);
    }

    public function store(Request $request){
        $this-> validate($request,[
            'tanggal'=>'required',
            'nama'=>'required',
            'nama_obat'=>'required',
            'jumlah'=>'required',
            'total_harga'=>'required',
            'kategoris'=>'required',
        ]);

        $obat = new Obat();
        $obat -> tanggal = request('tanggal');
        $obat -> nama = request('nama');
        $obat -> nama_obat = request('nama_obat');
        $obat -> jumlah = request('jumlah');
        $obat -> total_harga = request('total_harga');
        $obat -> metode_pembayaran = '';
        $obat -> save();

        foreach (request('kategoris') as $kategori) {
            $obat->kategoris()->attach($kategori);
        }
        return redirect(route('obat_index'));
    }

    public function edit($id){
        $obat = Obat::find($id);
        $kategoris=Kategori::all();
        return view('admin.obat.edit', compact('obat','id', 'kategoris'));
    }
    
    public function update(Request $request, $id){
        $this-> validate($request,[
            'tanggal'=>'required',
            'nama'=>'required',
            'nama_obat'=>'required',
            'jumlah'=>'required',
            'total_harga'=>'required',
            'kategoris'=>'required',
        ]);

        $obat = Obat::find($id);
        $obat -> tanggal = request('tanggal');
        $obat -> nama = request('nama');
        $obat -> nama_obat = request('nama_obat');
        $obat -> jumlah = request('jumlah');
        $obat -> total_harga = request('total_harga');
        $obat -> metode_pembayaran = '';
        $obat -> save();

        //foreach (request('kategoris') as $kategori) {
            //$obat->kategoris()->updateExistingPivot($id, request('kategoris'));
            if(empty(request('kategoris'))){
                $obat->kategoris()->detach();
            }else{
                $obat->kategoris()-> sync(request('kategoris'));
            }
            
        //}
        return redirect(route('obat_edit', $id));
    }

    public function destroy($id){
        $obat = Obat::find($id);
        $obat->kategoris()->detach();
        $obat->delete();

        return redirect(route('obat_index'));
    }
}
