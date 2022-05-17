<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo List Case</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <h3>İşler minimum {{$week}} haftada bitecek</h3>
</div>
@foreach($data as $devName => $item)
    <div class="container mt-5">
        <p class="fs-4">{{$devName}}</p>

        <div class="accordion" id="accordionExample">
            @foreach($item as $keyWeek => $weekData)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button @if($keyWeek > 0) collapsed @endif " type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{$devName.$keyWeek}}"
                                aria-expanded="@if(!$keyWeek) true @else false @endif"
                                aria-controls="{{$devName.$keyWeek}}">
                            {{$keyWeek+1}}. Hafta
                        </button>
                    </h2>
                    <div id="{{$devName.$keyWeek}}" class="accordion-collapse collapse @if(!$keyWeek) show @endif"
                         aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Seviye</th>
                                    <th scope="col">Süre</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($weekData as $key => $todoName)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$todoName["name"]}}</td>
                                        <td>{{$todoName["level"]}}</td>
                                        <td>{{$todoName["estimatedDuration"]}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>
    </div>

@endforeach


</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</html>
