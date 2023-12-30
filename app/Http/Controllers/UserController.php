<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.user.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('dashboard.user.show', compact('user'));
        } else {
            return back()->with('error', 'Data pengguna tidak ditemukan');
        }
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'level' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'name',
                'email',
                'password',
                'level',
                'address',
            ]);
            $data['id'] = $id;
            $dataCreated = User::create($data);
            if ($dataCreated) {
                return redirect(route('index-dashboard-user'))->with('success', 'Pengguna berhasil dibuat.');
            } else {
                return back()->with('error', 'Pengguna gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'level' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $user = User::find($id);
            if (!$user) {
                return back()->with('error', 'Data pengguna tidak ditemukan');
            } else {
                $data = $request->only([
                    'name',
                    'email',
                    'password',
                    'level',
                    'address',
                ]);
                $dataUpdated = $user->update($data);
                if ($dataUpdated) {
                    return redirect(route('index-dashboard-user'))->with('success', 'Pengguna berhasil diedit.');
                } else {
                    return back()->with('error', 'Pengguna gagal diedit');
                }
            }
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return back()->with('error', 'Data pengguna tidak ditemukan');
        }
        $user->delete();
        return redirect(route('index-dashboard-user'))->with('success', 'Pengguna berhasil dihapus.');
    }

    public function verifyUser($id){
        $user = User::find($id);
        if (!$user) {
            return back()->with('error','Data pengguna tidak ditemukan');
        }

        $user->email_verified_at = Carbon::now();
        $user->save();
        return back()->with('success','Pengguna berhasil diferifikasi');
    }
}
