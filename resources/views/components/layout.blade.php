<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/src/style.css" rel="stylesheet">
  <title>{{ config('app.name')}}</title>
  @vite('resources/css/app.css')
</head>
<body  style="background-color: #ffd196;" class="py-10">
  {{--Header--}}
  <x-header/>
 {{$slot}}

 {{--Footerapedeuta--}}
 <x-footer/>
</body>
</html>