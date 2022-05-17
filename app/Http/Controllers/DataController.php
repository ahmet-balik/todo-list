<?php

namespace App\Http\Controllers;

use App\Models\TodoList;

class DataController extends Controller
{
    public function data()
    {
        $estimatedDuration = TodoList::query()
            ->select("id", "name", "level", "estimatedDuration")
            ->selectRaw("level*estimatedDuration AS totalTime")
            ->orderBy("totalTime", "DESC")->get();
        if ($estimatedDuration->toArray()) $estimatedDuration = $estimatedDuration->toArray();
        else return view("install");

        $developer = $this->developer();

        $devWorkWeekHour = array_sum(array_column($developer, 'level')) * 45;
        $totalHour = array_sum(array_column($estimatedDuration, 'totalTime'));
        $week = ceil($totalHour / $devWorkWeekHour);
        $returnData = [];

        for ($i = 0; $i < $week; $i++) {

            foreach ($developer as $itemDev) {
                $useDevNoneLevelHour = 0;
                $devNoneLevelHour = $itemDev["level"] * 45;

                foreach ($estimatedDuration as $key => $itemJob) {
                    if ($useDevNoneLevelHour + $itemJob["totalTime"] <= $devNoneLevelHour) {
                        $useDevNoneLevelHour += $itemJob["totalTime"];

                        $returnData[$itemDev["name"]][$i][] = [
                            "name" => $itemJob["name"],
                            "level" => $itemJob["level"],
                            "estimatedDuration" => $itemJob["estimatedDuration"]
                        ];
                        unset($estimatedDuration[$key]);
                    }
                }
            }
        }

        $response = [
            "data" => $returnData,
            "week" => $week
        ];

        return view("index", $response);

    }
}
