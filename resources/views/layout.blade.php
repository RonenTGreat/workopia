<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $title ?? 'Workopia | Find and list jobs'  }}</title>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100">
    <x-header />
    @if (request()->is('/'))
    <x-hero />
    <x-top-banner />
    @endif
    <main class="container mx-auto p-4 mt-4">
        <!-- Display alert -->
        @if (session('success'))
        <x-alert type="success" message="{{ session('success') }}" />
        @endif

        @if (session('error'))
        <x-alert type="error" message="{{ session('error') }}" />
        @endif
        {{ $slot }}
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>