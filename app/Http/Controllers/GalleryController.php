<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index() {
        $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
    }

    public function create() {
        return view('manage_gallery.create');
    }

    public function store(Request $request) {
       $saved = Gallery::store($request);
       return redirect()->back()->with(
        ['message' => 'Gallery created successfully']);
    }

    public function manageGallery(Request $request) {
        $gallery = Gallery::all();
        return view('manage_gallery.index', compact('gallery'));
    }
}
