<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class portfolioController extends Controller
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
        $data = Portfolio::with('category')->get();
        return view('dashboard.portfolio.index')->with('data', $data);

        // $data = History::all();

        // return view('dashboard.experience.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image_file_url' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('uploads', ['disk' => 'public']);

        $newPortfolio = new Portfolio();
        $newPortfolio->category_id = $request->category_id;
        $newPortfolio->title = $request->title;
        $newPortfolio->description = $request->description;
        $newPortfolio->image_file_url = '/storage/' . $imagePath;
        $newPortfolio->save();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Portfolio added successfully'
        ]);

        return redirect()->route('portfolio.index');
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
        $data = portfolio::where('id', $id)->first();

        return view('dashboard.portfolio.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'category' => 'required',
                'title' => 'required',
                'description' => 'required',
                'image_file' => 'nullable|image'
            ]
        );

        $portfolio = Portfolio::findOrFail($id);

        $imagePath = $request->file('image_file')->store('uploads', ['disk' => 'public']);
        $portfolio = [
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image_file_url' => $request->$imagePath
        ];

        portfolio::where('id', $id)->update($portfolio);

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Portfolio updated successfully'
        ]);

        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $portfolio->delete();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Portfolio deleted successfully'
        ]);

        return redirect()->route('portfolio.index');
    }
}
