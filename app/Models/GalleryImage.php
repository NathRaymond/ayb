<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'short_note',
        'image',
        'image64',
        'event_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    //Accessor and Mutators
    public function getNameAttribute($name)
    {
        return ucwords($name);
    }

    public static function uploadImage($note)
    {
        $imageExt = $note->uploadPhoto->extension();
        $filename = time() . "." . $imageExt;
        $imageBase64 = base64_encode(file_get_contents($note->uploadPhoto));

        $data = [
            "name" => $note->name,
            "image" => $filename,
            "image64" => "data:image/" . $imageExt . ";base64," . $imageBase64,
            "short_note" => $note->short_note,
            "event_date" => $note->event_date
        ];

        self::create($data);
    }
    public static function updateGallery($gallery)
    {
        $imageExt = $gallery->uploadPhoto->extension();
        $filename = time() . '.' . $imageExt;
        $imageBase64 = base64_encode(file_get_contents($gallery->uploadPhoto));
        $galleryImage = GalleryImage::find($gallery->id);
        $galleryImage->name = $gallery->name;
        $galleryImage->image = $filename;
        $galleryImage->image64 = 'data:image/' . $imageExt . ';base64,' . $imageBase64;
        $galleryImage->event_date = $gallery->event_date;
        $galleryImage->short_note = $gallery->short_note;
        $galleryImage->save();
    }



}