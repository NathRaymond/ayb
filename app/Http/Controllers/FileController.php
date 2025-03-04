<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{

    //Upload Phots
    public function upload(GalleryImageRequest $request)
    {
        //if the file exit
        if ($request->hasFile('uploadPhoto')) {
            GalleryImage::uploadImage($request);
            return redirect()->back()->with('message', 'Image Uploaded');
        }

        // GalleryImage::create($data);
        $request->session()->flash('error', 'Image Not Uploaded');
        return redirect()->back();
    }

    /**
     * Method to export
     *
     * @param Request $request
     */
    public function downloadParticipantExcel()
    {
        return Excel::download(new ParticipantExport, 'ayb_participant.xlsx');
    }

    /**
     * Method to export
     *
     * @param Request $request
     */
    public function downloadMemberExcel()
    {
        return Excel::download(new MemberExport, 'ayb_member.xlsx');
    }

}