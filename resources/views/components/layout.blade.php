<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>
        {{ $title ?? 'Work web application' }}
    </title>

</head>

<body class="mx-auto max-w-2xl mt-10 bg-slate-200 text-slate-700 sm:px-6 lg:px-8">
    {{ $slot }}
</body>

</html>