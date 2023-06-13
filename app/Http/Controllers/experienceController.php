<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class experienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $data = history::where('type','experience')->orderBy('end_date','desc')->get();
        return view('dashboard.experience.index')->with('data', $data);

        // $data = History::all();

        // return view('dashboard.experience.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'info1' => 'required',
                'start_date' => 'required',
                'content' =>  'required'
            ]
        );

        $newHistory = new History();
        $newHistory->title = $request->title;
        $newHistory->info1 = $request->info1;
        $newHistory->type = 'experience';
        $newHistory->start_date = $request->start_date;
        $newHistory->end_date = $request->end_date;
        $newHistory->content = $request->content;
        $newHistory->save();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Experience added successfully'
        ]);

        return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $data = History::findOrFail($id)->where('type', 'experience');
        $data = history::where('id', $id)->where('type', 'experience')->first();

        return view('dashboard.experience.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title' => 'required',
                'info1' => 'required',
                'start_date' => 'required',
                'content' =>  'required'
            ]
        );

        $data = [
            'title' => $request->title,
            'info1' => $request->info1,
            'type' => 'experience',
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'content' => $request->content
        ];
        history::where('id', $id)->where('type', 'experience')->update($data);

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Experience updated successfully'
        ]);

        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $history = History::findOrFail($id)->where('type', 'experience');

        $history->delete();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Experience deleted successfully'
        ]);

        return redirect()->route('experience.index');
    }
}
