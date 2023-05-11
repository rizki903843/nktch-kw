<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationsController extends Controller
{
    public function index()
   {
    $reservations = Reservations::get();
    return view ('admin.reservations.index', ['reservations' => $reservations]);
   }

   public function tambah()
   {
    return view ('admin.reservations.form');
   }

   public function simpan(Request $request)
   {
    $data = [
        'nama_meja' => $request->nama_meja,
        'jumlah_orang' => $request->jumlah_orang,
        'stok' => $request->stok,
    ];
    Reservations::create($data);
    return redirect()->route('admin.reservations');
   }

  public function edit($id)
  {
    $reservations = Reservations::where('id', $id)->first();
    return view ('admin.reservations.form',['reservations'=>$reservations]);
  }

  public function update($id, Request $request)
  {
    $data = [
        'nama_meja' => $request->nama_meja,
        'jumlah_orang' => $request->jumlah_orang,
        'stok' => $request->stok,

    ];
    
    Reservations::find($id)->update($data);
    return redirect()->route('admin.reservations');
  }

  public function hapus($id)
  {
    Reservations::find($id)->delete();

    return redirect()->route('admin.reservations');
  }
}
