<?php

namespace App\Http\Controllers;
use App\Pengguna;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function tambah()
    {
        return view('userDaftar');
    }
    
    public function papar()
    {
        
        $penggunas = Pengguna::all();
        return view('userList', compact('penggunas'));
    }
    
    
    public function daftar(Request $request)
    {
        request()->validate([
            'ic'=>['required', 'min:12','unique:penggunas,ic'],
            'nama'=>['required'],
            'gambar'=>['mimes:jpg,jpeg,png','max:10000']
        ]);

        $penggunas = new Pengguna;
        $penggunas->ic = request('ic');
        $penggunas->nama = request('nama');
        $jantina = substr(request('ic'),11);
        if($jantina % 2 == 0)
        {
            $penggunas->jantina = "Perempuan";
        }
        else
        {
            $penggunas->jantina = "Lelaki";
        }
        $umur = substr(request('ic'),0,2);
        if($umur < 10)
        {
            $penggunas->umur = date('Y')-(2000+$umur);
        }
        else
        {
            $penggunas->umur = date('Y')-(1900+$umur);
        }

        $img = request('gambar');
        if($img != NULL){
            $namaGambar = request('ic').".".$img->getClientOriginalExtension();
            $penggunas->gambar = $namaGambar;
            request('gambar')->storeAs('public/img',$namaGambar);
        }
        $penggunas->save();

        return redirect()->route('userList');
    }

    public function ubah(Pengguna $pengguna)
    {
        return view('userUbah',compact('pengguna'));
    }

    
    public function ubahSave(Request $request, Pengguna $pengguna)
    {
        
        if($pengguna->ic == request('ic'))
        {
            request()->validate([
                'ic'=>['required', 'min:12'],
                'nama'=>['required'],
                'gambar'=>['mimes:jpg,jpeg,png','max:10000']
            ]);
        }
        else
        {
            request()->validate([
                'ic'=>['required', 'min:12','unique:penggunas,ic'],
                'nama'=>['required'],
                'gambar'=>['mimes:jpg,jpeg,png','max:10000']
            ]);
        }

        $pengguna->ic = request('ic');
        $pengguna->nama = request('nama');
        $jantina = substr(request('ic'),11);
        if($jantina % 2 == 0)
        {
            $pengguna->jantina = "Perempuan";
        }
        else
        {
            $pengguna->jantina = "Lelaki";
        }
        $umur = substr(request('ic'),0,2);
        if($umur < 10)
        {
            $pengguna->umur = date('Y')-(2000+$umur);
        }
        else
        {
            $pengguna->umur = date('Y')-(1900+$umur);
        }

        $img = request('gambar');
        if($img != NULL){
            $namaGambar = request('ic').".".$img->getClientOriginalExtension();
            $pengguna->gambar = $namaGambar;
            request('gambar')->storeAs('public/img',$namaGambar);
        }
        $pengguna->save();

        return redirect()->route('userList');
    }

    public function statistik ()
    {
        $penggunas = Pengguna::all();
        $lelaki = 0;
        $perempuan = 0;

        foreach($penggunas as $pengguna)
        {
            if($pengguna->jantina == "Lelaki")
            {
                $lelaki++;
            }
            else
            {
                $perempuan++;
            }
        }
        // dd($stats);

        return view ('userStat', compact('lelaki','perempuan'));
    }
}
