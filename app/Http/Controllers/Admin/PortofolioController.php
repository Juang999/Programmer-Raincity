<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortofolioRequest;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $portofolio = Portofolio::get();

            return view('admin.portofolio.index', [
                'portofolio' => $portofolio
            ]);
        } catch (\Throwable $th) {
            //
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortofolioRequest $request)
    {
        // dd($request->all());

        try {
            Portofolio::create([
                'title' => $request->title,
                'build_with' => $request->buildWith,
                'description' => $request->description,
                'demo_url' => ($request->demoUrl) ? $request->demoUrl : '#',
                'project_url' => ($request->projectUrl) ? $request->projectUrl : '#',
                'is_active' => 1
            ]);

            return redirect('/admin-panel/portofolio')->with('success', 'berhasil membuat portofolio');
        } catch (\Throwable $th) {
            return redirect('/admin-panel/portofolio')->with('failed', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        try {
            return response()->json($portofolio, 200);
        } catch (\Throwable $th) {
            return redirect('/admin-panel/portofolio')->with('failed', $th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        try {
            $portofolio->delete();

            return redirect('/admin-panel/portofolio')->with('success', 'berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect('/admin-panel/portofolio')->with('failed', $th->getMessage());

        }
    }
}