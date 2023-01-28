<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::orderBy('team_name', 'ASC')->get();
        return view('admin.team.index', compact('teams'));
    }

    public function create() {
        return view('admin.team.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'team_name' => 'required|unique:teams,team_name',
            'team_positition' => 'required',
            'team_picture' => 'required|file|image|max:5120'
        ]);

        $image = $request->file('team_picture');
        $upload = 'upload/team/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(320, 320)->save('storage/' . $upload);

        $validated['team_picture'] = $upload;

        Team::create($validated);

        $notification = [
            'message' => 'Team Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.team.index')->with($notification);
    }

    public function edit(Team $team) {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team) {
        $request->validate([
            'team_name' => 'required|unique:teams,team_name,'.$team->id,
            'team_positition' => 'required',
            'team_picture' => 'file|image|max:5120'
        ]);

        if ($request->team_picture) {
            Storage::delete($team->team_picture);
            $image = $request->file('team_picture');
            $upload = 'upload/team/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(320, 320)->save('storage/' . $upload);
            $team_picture = $upload;
        } else {
            $team_picture = $team->team_picture;
        }

        $update = $request->except(['_token', 'team_picture']);
        $update['team_picture'] = $team_picture;

        $team->update($update);

        $notification = [
            'message' => 'Team Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.team.index')->with($notification);
    }

    public function destroy(Team $team) {
        Storage::delete($team->team_picture);
        $team->delete();

        $notification = [
            'message' => $team->team_name . ' Team Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
