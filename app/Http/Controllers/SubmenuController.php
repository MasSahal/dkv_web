<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Menu;
use App\Models\Submenu;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Submenu::all();
        return view('admin.submenu.index', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view("admin.submenu.create", compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu'             => 'required',
            'icon_submenu' => 'required|min:3|max:100',
            'nama_submenu' => 'required|min:3|max:100',
            'urutan_submenu' => 'required',
        ]);

        $data = [
            'id_menu'          => $request->menu,
            'nama_submenu'     => $request->nama_submenu,
            'icon_submenu'     => $request->icon_submenu,
            'slug_submenu'     => Str::slug($request->nama_submenu),
            'urutan_submenu'   => $request->urutan_submenu,
        ];

        Submenu::create($data);
        return redirect()->route("submenu.index")->with("success", "Submenu $data[nama_submenu] berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(submenu $submenu)
    {
        // $submenu =
        // return view("admin.submenu.create");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(submenu $submenu)
    {
        return view("admin.submenu.edit", compact('submenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, submenu $submenu)
    {
        $request->validate([
            'menu'             => 'required',
            'icon_submenu'     => 'required|min:3|max:100',
            'nama_submenu'     => 'required|min:3|max:100',
            'urutan_submenu'   => 'required',
        ]);

        $data = [
            'id_menu'          => $request->menu,
            'nama_submenu'     => $request->nama_submenu,
            'icon_submenu'     => $request->icon_submenu,
            'slug_submenu'     => Str::slug($request->nama_submenu),
            'urutan_submenu'   => $request->urutan_submenu,
        ];

        $submenu->update($data);
        return redirect()->route("submenu.index")->with("success", "Submenu $data[nama_submenu] berhasil diperbaharui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(submenu $submenu)
    {
        $old = $submenu->nama_submenu;
        $submenu->delete();
        return redirect()->route("submenu.index")->with("success", "Submenu $old berhasil dihapus!");
    }
}
