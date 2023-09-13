<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\SchoolProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class SchoolProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SchoolProfile::first();
        return view('pages.backoffice.settings.profileSetting', compact('data'));
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
    public function store(Request $request)
    {
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

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'banner' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'visi' => 'required',
            'misi' => 'required',
            'intro' => 'required|url',
            'address' => 'required',
        ]);
        try {
            if ($request->logo) {
                $fileType = $request->file('logo')->extension();
                $name = Str::random(8) . '.' . $fileType;
                $input['logo'] = Storage::putFileAs('logo', $request->file('logo'), $name);
            }
            if ($request->banner) {
                $fileType = $request->file('banner')->extension();
                $name = Str::random(8) . '.' . $fileType;
                $input['banner'] = Storage::putFileAs('banner', $request->file('banner'), $name);
            }

            $input['name'] = $request->name;
            $input['intro'] = $request->intro;
            $input['email'] = $request->emai ?? '-';
            $input['phone'] = $request->phone ?? '-';
            $input['address'] = $request->address ?? '-';
            $input['visi'] = $request->visi ?? '-';
            $input['misi'] = $request->misi ?? '-';
            SchoolProfile::where('id', $id)->update($input);
            return back()->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Gagal mengubah data ' . $th->getMessage());
            throw $th;
        }

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
