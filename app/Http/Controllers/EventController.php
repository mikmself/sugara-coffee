<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('dashboard.event.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::find($id);
        if ($event) {
            return view('dashboard.event.show', compact('event'));
        } else {
            return back()->with('error', 'Data event tidak ditemukan');
        }
    }

    public function create()
    {
        $users = User::all();
        return view('dashboard.event.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_creator' => 'required|exists:users,id',
            'title' => 'required',
            'content' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Pengaturan gambar
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'id_creator',
                'title',
                'content',
                'start_date',
                'end_date',
            ]);
            $data['id'] = $id;

            // Mengelola gambar
            $image = $request->file('image');
            $imageFileName = $id . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('event_images'), $imageFileName);
            $data['image'] = $imageFileName;

            $dataCreated = Event::create($data);
            if ($dataCreated) {
                return redirect(route('event.index'))->with('success', 'Event berhasil dibuat.');
            } else {
                return back()->with('error', 'Event gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $event = Event::find($id);
        $users = User::all();
        return view('dashboard.event.edit', compact('event', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_creator' => 'required|exists:users,id',
            'title' => 'required',
            'content' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $event = Event::find($id);
            if (!$event) {
                return back()->with('error', 'Data event tidak ditemukan');
            } else {
                $data = $request->only([
                    'id_creator',
                    'title',
                    'content',
                    'start_date',
                    'end_date'
                ]);

                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageFileName = $id . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('event_images'), $imageFileName);
                    $data['image'] = $imageFileName;

                    // Menghapus gambar lama
                    if (File::exists(public_path('event_images/' . $event->image))) {
                        File::delete(public_path('event_images/' . $event->image));
                    }
                }

                $dataUpdated = $event->update($data);
                if ($dataUpdated) {
                    return redirect(route('event.index'))->with('success', 'Event berhasil diedit.');
                } else {
                    return back()->with('error', 'Event gagal diedit');
                }
            }
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return back()->with('error', 'Data event tidak ditemukan');
        }

        if (File::exists(public_path('event_images/' . $event->image))) {
            File::delete(public_path('event_images/' . $event->image));
        }

        $event->delete();
        return redirect(route('event.index'))->with('success', 'Event berhasil dihapus.');
    }
}
