<?php

namespace App\Support;

use App\Models\TodoList;
use Illuminate\Support\Facades\Http;

class MyTodo
{
    public function getTodo($endpoint)
    {
        $response = Http::get($endpoint)->json();
        $keyName = array_keys($response[0])[0];
        if ($keyName === "zorluk") {
            $todo = array_map(function ($item) {
                return array(
                    'level' => $item['zorluk'],
                    'estimatedDuration' => $item['sure'],
                    'name' => $item['id'],
                );
            }, $response);
        } else {
            $todo = array_map(function ($item) {
                $todoName = array_keys($item)[0];
                return array(
                    'level' => $item[$todoName]["level"],
                    'estimatedDuration' => $item[$todoName]["estimated_duration"],
                    'name' => $todoName,
                );
            }, $response);
        }
        $todoInsert = TodoList::insert($todo);
        return $todoInsert;
    }
}
