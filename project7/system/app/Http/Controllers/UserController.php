<?php 

namespace App\Http\Controllers;
use App\models\User;
use App\models\UserDetail;

class UserController extends Controller {

  function index(){
    $data['list_user'] = User::all();
    return view('user.index', $data);
  } 

  function store (){
    $user = new User;
    $user->nama = request('nama');
    $user->username = request('username');
    $user->email = request('email');
    $user->password = bcrypt(request('password'));
    $user->save();

    $userDetail = new UserDetail();
    $userDetail->id_user = $user->id;
    $userDetail->no_handphone = request('no_handphone');
    $userDetail->save();

    return redirect('user')->with('success', 'data berhasil ditambahkan');
  }

  function create() {
    return view('user.create');
  }

  function show(User $user) {
    $data['user'] = $user;
    return view('user.show', $data);
  }

  function edit(User $user) {
    $data['user'] = $user;
    return view('user.edit', $data);
  }

  function update(User $user){
    $user->nama = request('nama');
    $user->username = request('username');
    $user->email = request('email');
    if (request("password"))$user->password = bcrypt(request('password'));   
    $user->save();
    return redirect('user')->with('success', 'data berhasil edit');

  }
  
  function destroy (User $user){
    $user->delete();

    return redirect('user')->with('danger', 'data berhasil dihapus');
  }

}