<?php

namespace App\Exports;

use App\Models\BootCamp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BootcampsExport implements FromCollection
{
    protected $eventtype;

    public function __construct($eventtype)
    {
        $this->eventtype = $eventtype;
    }

    public function collection()
    {
        return BootCamp::where('eventtype', $this->eventtype)->get();
    }
}
