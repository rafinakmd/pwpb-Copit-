<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
  public function index()
  {
    $data['tugas'] = \DB::table('corona')->get();
    return view('tugas', $data);
  }

  public function create()
  {
    return view('tugas.form');
  }

  public function store(Request $request)
  {
    $rule = [
      'lokasi' => 'required|string',
      'positive' => 'required|numeric',
      'sembuh' => 'required',
      'mati' => 'required'
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    unset($input['_token']);
    $status = \DB::table('corona')->insert($input);

    if($status){
      return redirect('/tugas')->with('success', 'Data berhasil ditambahkan');
    } else {
      return redirect('/tugas/create')->with('error', 'Data gagal ditambahkan');
    }
  }

  public function edit(Request $request, $id)
  {
    $data['tugas'] = \DB::table('corona')->find($id);
    return view('tugas.form', $data);
  }

  public function update(Request $request, $id)
  {
    $rule = [
      'lokasi' => 'required|string',
      'positive' => 'required|numeric',
      'sembuh' => 'required',
      'mati' => 'required'
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    unset($input['_token']);
    unset($input['_method']);

    $status = \DB::table('corona')->where('id', $id)->update($input);

    if($status){
      return redirect('/tugas')->with('success', 'Data berhasil diubah');
    }else{
      return redirect('/tugas/create')->with('error', 'Data gagal diubah');
    }
  }

  public function destroy(Request $request, $id)
  {
    $status = \DB::table('corona')->where('id', $id)->delete();

    if($status){
      return redirect('/tugas')->with('success', 'Data berhasil dihapus');
    }else{
      return redirect('/tugas/create')->with('error', 'Data gagal dihapus');
    }
  }
}
