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
    <p class="fs-4">Tanıtım</p>
    <p>Migrationlar oluşturulmuş fakat veritabanı hazır verilmiştir.Verit tabanında sqllite kullanılmaktadır.</p>
    <p>Todo listi görmek için database todo datalarını kaydedilmesi lazım.</p>
    <p>Terminalı açın ve projenin ana dizinine giderek ' php artisan provider:todo {endpoint} ' komutunu çalıştırın.</p>
    <p>( php artisan provider:todo http://www.mocky.io/v2/5d47f24c330000623fa3ebfa )</p>
    <p>( php artisan provider:todo http://www.mocky.io/v2/5d47f235330000623fa3ebf7 )</p>


</div>

</body>

</html>
