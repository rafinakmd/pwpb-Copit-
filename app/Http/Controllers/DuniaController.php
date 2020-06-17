<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuniaController extends Controller
{
  public function index()
  {
    $data['dunia'] = \DB::table('dunia')->get();
    return view('dunia', $data);
  }

  public function create()
  {
    return view('dunia.form');
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
    $status = \DB::table('dunia')->insert($input);

    if($status){
      return redirect('/dunia')->with('success', 'Data berhasil ditambahkan');
    } else {
      return redirect('/dunia/create')->with('error', 'Data gagal ditambahkan');
    }
  }

  public function edit(Request $request, $id)
  {
    $data['dunia'] = \DB::table('dunia')->find($id);
    return view('dunia.form', $data);
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

    $status = \DB::table('dunia')->where('id', $id)->update($input);

    if($status){
      return redirect('/dunia')->with('success', 'Data berhasil diubah');
    }else{
      return redirect('/dunia/create')->with('error', 'Data gagal diubah');
    }
  }

  public function destroy(Request $request, $id)
  {
    $status = \DB::table('dunia')->where('id', $id)->delete();

    if($status){
      return redirect('/dunia')->with('success', 'Data berhasil dihapus');
    }else{
      return redirect('/dunia/create')->with('error', 'Data gagal dihapus');
    }
  }
}
