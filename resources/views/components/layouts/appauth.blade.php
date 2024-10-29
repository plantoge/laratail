<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title}}</title>
</head>
<body>
    <main class="bg-base-200 min-h-screen">
        <div class="container mx-auto p-2 sm:p-4 lg:p-10">
            {{$slot}}
        </div>    
    </main>    
</body>
</html>