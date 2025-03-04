<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'event_outline',
        'participant_number',
        'event_date',
        'is_closed',
        'image',
        'image64',
        'fee',
        'early_birds',
        'late_payment',
        'discount'
    ];

    public static function storeEvent($event)
    {
        $filename = time() . '.' . $event->upload->extension();
        $extension = pathinfo(parse_url($filename, PHP_URL_PATH), PATHINFO_EXTENSION);
        $imageBase64 = base64_encode((file_get_contents($event->upload->path())));
        $image = "data:image/" . $event->upload->extension() . ";base64," . $imageBase64;


        // $uploaded = $event->upload->storeAs('event_banner', $filename, 'public');
        // dd($event);
        $data = [
            "name" => $event->name,
            "event_outline" => $event->event_outline,
            "participant_number" => $event->participant_number,
            "event_date" => $event->event_date,
            "image" => $filename,
            "image64" => $image,
            "is_closed" => $event->is_closed,
            "fee" => $event->fee,
            "early_birds" => $event->early_birds,
            "discount" => $event->discount,
            "late_payment" => $event->late_payment,
        ];
        return $response = self::create($data);
    }


    public static function updateEvent($event)
    {
        $filename = '';
        $updateEvent = Event::find($event->id);
        $imageBase64 = '';



        if ($event->hasFile('upload')) {
            $filename = time() . '.' . $event->upload->extension();
            $uploaded = $event->upload->storeAs('event_banner', $filename, 'public');
            $imageBase64 = base64_encode((file_get_contents($event->upload->path())));
            $imageBase64 = "data:image/" . $event->upload->extension() . ";base64," . $imageBase64;
        } else {
            $filename = basename($updateEvent->image);
            $imageBase64 = $updateEvent->image64;
        }

        $updateEvent->name = $event->name;
        $updateEvent->event_outline = $event->event_outline;
        $updateEvent->participant_number = $event->participant_number;
        $updateEvent->event_date = $event->event_date;
        $updateEvent->image = $filename;
        $updateEvent->image64 = $imageBase64;
        $updateEvent->is_closed = $event->is_closed;
        $updateEvent->fee = $event->fee;
        $updateEvent->early_birds = $event->early_birds;
        $updateEvent->discount = $event->discount;
        $updateEvent->late_payment = $event->late_payment;

        $updateEvent->save();
        return $updateEvent;
    }

    public function createImage()
    {
        $decodeBase64 = base64_decode($this->image64);
        Storage::disk('public')->put('event_banner/' . basename($this->image), $decodeBase64);
    }

    //Accessor and Mutators
    public function getImageAttribute($image)
    {
        return 'event_banner/' . $image;
    }

    // public function setImageAttribute($image)
    // {
    //     if($image == null) $this->attributes =
    //      'event_banner/' . $image;
    // }

    public function getIsClosedAttribute($bool)
    {
        if ($bool)
            return 'Closed';
        else
            return 'Open';
    }

    public function setIsClosedAttribute($bool)
    {
        $boolValue = true;

        if (is_null($bool))
            $boolValue = false;

        $this->attributes['is_closed'] = $boolValue;
    }

    //Relations
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}