<!-- resources/views/campaigns/create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

</head>

<body>

    <div class="container mx-auto mt-6">

        <h1 class="text-center text-2xl font-bold">Créer une nouvelle campagne email</h1>
        <x-bladewind::card title="Formulaire">
            <form method="POST" action="{{ route('email-campaign.store') }}">
                @csrf
                <div class="flex gap-1">
                    <x-bladewind::input required="true" label="Titre" name="title" value="{{ old('title') }}" />
                    <x-bladewind::input required="true" label="Objet" name="subject" value="{{ old('subject') }}" />
                </div>

                <x-bladewind::textarea required="true" label="Contenu" name="content" value="{{ old('content') }}" />

                <x-bladewind::button can_submit="true">Créer la campagne</x-bladewind::button>
            </form>
        </x-bladewind::card>

    </div>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</body>

</html>