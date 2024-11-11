<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title></title>
    @livewireStyles
</head>
<body class="m-0 p-0 top-0 right-0 ">
    <div class="flex w-full h-auto  ">
        <livewire:admin.menu-lateral-admin/>       
        <main class="w-full   ">
          <livewire:admin.nav-admin/>
          <x-content-main-admin />
          @yield('main')
    </main>
    </div>
    @livewireScripts
</body>
</html>