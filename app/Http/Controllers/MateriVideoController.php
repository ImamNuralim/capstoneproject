<?php

namespace App\Http\Controllers;

use App\Models\Materi_video;
use Illuminate\Http\Request;

class MateriVideoController extends Controller
{
    public function index()
    {
        return view('user.materivideo.index');
    }

    public function create()
    {
        return view('user.materivideo.create');
    }

    public function store (Request $request)
    {
        $validateData = $request-> validate([
            'Tema' => 'required|max:255',
            'detail' => 'required|max:255'
        ]);

        Materi_video::crete($validateData);

        return redirect('/materivideo/materivideo')->with('Sukses', 'Materi Video Telah Berhasil Ditambah!');
    }

    public function edit(Materi_video $materi_video )
    {
        return view('user.materivideo.edit',[
            'materi_video' => $materi_video
        ]);
    }

    public function update (Request $request, Materi_video $materi_video)
    {
        $validateData = $request->validate([
            'Tema' => 'required|max:255',
            'detail' => 'required|max:255'
        ]);

        Materi_video::where('id', $materi_video->id)->update($validateData);
        return redirect ('/materivideo/materivideo')->with('Sukses', 'Video Berhasil Diupdate ');
    }

    public function destroy(Materi_video $materi_video)
    {
        Materi_video::destroy($materi_video->id);
        return redirect('/materivideo/materivideo')->with('success', 'Materi Telah Berhasil Dihapus');
    }

    public function recycle()
    {
        return view('materi_video.recycle', [
            'Materi_videos' => Materi_video::onlyTrashed()->get()
        ]);
    }

    public function restore($Materi_videoId)
    {
        Materi_video::onlyTrashed()->find($Materi_videoId)->restore();
        return redirect('/materivideo/materivideo/resycle')->with('Sukses', 'Materi Video Berhasil Direstore');
    }

    public function delete($Materi_videoId)
    {
        Materi_video::onlyTrashed()->find($Materi_videoId)->forceDelete();
        return redirect('/materivideo/materivideo/resycle')->with('Sukses', 'Materi Video Berhasil Dihapus Permanen');
    }
}
