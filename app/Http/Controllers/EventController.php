<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
            'title' => 'required',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }
        $event = new Event;
        $event->id = Str::uuid();
        $event->title = $request->input('title');
        $event->save();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $event->addMedia($image)->toMediaCollection('images');
            }
        }
        return redirect()->route('index-dashboard-event');
    }


    public function edit($id)
    {
        $event = Event::find($id);
        return view('dashboard.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }
        $event = Event::find($id);
        if (!$event) {
            return back()->with('error', 'Data event tidak ditemukan');
        }
        $data = $request->only('title');
        if ($request->hasFile('images')) {
            $event->clearMediaCollection('images');
            $images = $request->file('images');
            foreach ($images as $image) {
                $event->addMedia($image)->toMediaCollection('images');
            }
        }
        $event->update($data);
        return redirect(route('index-dashboard-event'))->with('success', 'Event berhasil diedit.');
    }


    public function destroy($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return back()->with('error', 'Data event tidak ditemukan');
        }
        $event->clearMediaCollection('images');
        $event->delete();
        return redirect(route('index-dashboard-event'))->with('success', 'Event berhasil dihapus.');
    }

}
