<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix(path: '/css/app.css') }}">
</head>
<body class="container xl:max-w-screen-xl mx-auto min-h-screen flex flex-col">
    <div class="w-full px-7 py-5 h-24 flex justify-between items-center sticky top-0 border-b border-gray-400 bg-white z-50">
        <a href="" class="h-10 hover:opacity-50">
            <img src="{{ \Illuminate\Support\Facades\Storage::url('assets/MeetPetlogo.png') }}" alt="" class="h-full object-contain">
        </a>
        <ul class="flex justify-start h-10">
            <li class="flex items-center">
                <a href="" class="h-1/2 hover:opacity-50">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/find.svg") }}" alt="" class="h-full object-contain">
                </a>
            </li>
            <li class="flex items-center">
                <a href="/chat" class="h-1/2 hover:opacity-50">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url("assets/chat.svg") }}" alt="" class="h-full object-contain">
                </a>
            </li>
            <li class="flex items-center">
                <a href="/profile" class="ring-1 ring-mint rounded p-2 px-3 text-mint hover:bg-mint hover:text-white hover:opacity-50">Мой профиль</a>
            </li>
        </ul>
    </div>
    {{ $slot }}

{{--    <script src="{{ mix(path: '/js/app.js') }}"></script>--}}
</body>
</html>
