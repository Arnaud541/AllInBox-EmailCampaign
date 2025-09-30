<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
        <title>AllInBox Email Campaign</title>
    </head>

    <body>
        <div class="container mx-auto mt-6">
            {{ $slot }}
        </div>
        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    </body>

</html>