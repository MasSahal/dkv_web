<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Menu;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Menu::all();
        return view('admin.menu.index', compact('record'));
    }

    // public function getAll(Request $request)
    // {
    //     // if ($request->ajax()) {
    //     $data = Menu::latest()->get();
    //     return DataTables::of($data)
    //         ->addIndexColumn()
    //         ->addColumn('action', function ($row) {
    //             $actionBtn = '<button type="button" class="edit btn btn-success btn-sm">Edit</button> <button type="button" class="delete btn btn-danger btn-sm btn-delete" onclick="delData(' . $row->id . ')">Delete</button>';
    //             return $actionBtn;
    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    //     // }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.menu.create");
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
            'icon_menu' => 'required|min:3|max:100',
            'nama_menu' => 'required|min:3|max:100',
            'urutan_menu' => 'required',
        ]);

        $data = [
            'nama_menu'     => $request->nama_menu,
            'icon_menu'     => $request->icon_menu,
            'slug_menu'     => Str::slug($request->nama_menu),
            'urutan_menu'   => $request->urutan_menu,
        ];

        Menu::create($data);
        return redirect()->route("menu.index")->with("success", "Menu berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        // $menu =
        // return view("admin.menu.create");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view("admin.menu.edit", compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'icon_menu'     => 'required|min:3|max:100',
            'nama_menu'     => 'required|min:3|max:100',
            'urutan_menu'   => 'required',
        ]);

        $data = [
            'nama_menu'     => $request->nama_menu,
            'icon_menu'     => $request->icon_menu,
            'slug_menu'     => Str::slug($request->nama_menu),
            'urutan_menu'   => $request->urutan_menu,
        ];

        $menu->update($data);
        return redirect()->route("menu.index")->with("success", "Menu berhasil diperbaharui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        dd($menu);
        // $menu->delete();
        return redirect()->route("menu.index")->with("success", "Menu berhasil dihapus!");
    }
}
