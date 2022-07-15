<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @routes
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/atom-one-dark.min.css" integrity="sha512-Jk4AqjWsdSzSWCSuQTfYRIF84Rq/eV0G2+tu07byYwHcbTGfdmLrHjUSwvzp5HvbiqK4ibmNwdcG49Y5RGYPTg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @inertiaHead
</head>

<body>
    @inertia
</body>
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>
<script>
    // hljs.highlightAll();
</script>
<!-- and it's easy to individually load additional languages -->
{{-- <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/languages/go.min.js"></script> --}}

</html>
