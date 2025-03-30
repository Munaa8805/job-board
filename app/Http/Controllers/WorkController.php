<?php

namespace App\Http\Controllers;

use App\Models\Work;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $works = Work::all();
        // $works = Work::orderBy('created_at', 'desc')->get();
        $works = Work::query();
        $works->when(request('search'), function ($query) {
            $query->where(function ($query) {
                $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%');
            });
        })->when(request("min_salary"), function ($query) {
            $query->where('salary', '>=', request("min_salary"));
        })->when(request("max_salary"), function ($query) {
            $query->where('salary', '<=', request("max_salary"));
        });
        return view('work.index', [
            'works' => $works->get(),
            "title" => "Works",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        // dd($work);
        return view('work.show', [
            'work' => $work,
            "title" => $work->title,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
