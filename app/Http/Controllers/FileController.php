<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

use App\Http\Requests;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arquivos = File::all();
        return view('files.list', ['files' => $arquivos]);
    }

    public function list_json()
    {
        $arquivos = File::all();
        return response()->json($arquivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileToStore = $request->file('media');

        if ($request->hasFile('media')) {

            if ($request->file('media')->isValid()) {

                $storedName = strtotime("now");

                $path = $fileToStore->storeAs('arquivos', $storedName);

                $file = new File();
                $file->title = $request->input('title');
                $file->name = $fileToStore->getClientOriginalName();
                $file->author = $request->input('author');
                $file->type = $request->input('type');
                $file->path = $path;
                $file->stored_name = $storedName;
                $file->file_type = $request->media->extension();

                $file->save();
                return back()->withInput()->with("success", "Arquivo salvo com sucesso!");
            } else {
                return back()->withInput()->with("success", "Arquivo inválido!");
            }

        } else {
            return back()->withInput()->with("success", "Nenhum arquivo enviado!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
