<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function developer()
    {
        $developer = [];
        for ($i = 1; $i < 6; $i++) {
            $dev = [
                "name" => "DEV" . $i,
                "estimatedDuration" => "1h",
                "level" => $i
            ];
            array_push($developer, $dev);
        }
        $keys = array_column($developer, 'level');
        array_multisort($keys, SORT_DESC, $developer);

        return $developer;
    }
}
