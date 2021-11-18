<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire</title>
    @livewireStyles
</head>
<body>
    <div class="container">
        {{ $slot  }}
    </div>
    @livewireScripts
</body>
</html>
