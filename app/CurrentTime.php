<?php

namespace App;

use Carbon\Carbon;
use Morilog\Jalali\Jalalian;

class CurrentTime
{
    public function sayDate()
    {
//        return Jalalian::fromFormat('Y-m-d H:i:s',Jalalian::now());
//        return Jalalian::now()->format('%A,%d');
        return Jalalian::fromCarbon(Carbon::now())->format('%A,%d %B %y');
    }
}
