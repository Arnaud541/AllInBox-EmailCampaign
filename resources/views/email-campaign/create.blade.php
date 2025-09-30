<x-layout>
    <x-bladewind::notification />

    @if (session('success'))
        <script>
            // Initialisation de la notification après chargement de la page
            window.addEventListener('load', function() {
                showNotification('{{ session('success') }}', 'Action réussie', 'success', 3);
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            // Initialisation de la notification après chargement de la page
            window.addEventListener('load', function() {
                showNotification('{{ session('error') }}', 'Erreur de création', 'error', 3);
            });
        </script>
    @endif
    
    <h1 class="text-center text-2xl font-bold mb-4">Créer une nouvelle campagne email</h1>
    <x-bladewind::card title="Formulaire">
        <form method="POST" action="{{ route('email-campaign.store') }}">
            @csrf
            <div class="flex gap-1">
                <div class="flex-1 flex-col">
                    <x-bladewind::input required="true" label="Titre" name="title" error_message="Vous devez entrer le titre" value="{{ old('title') }}" />
                    @error('title')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex-1 flex-col">
                    <x-bladewind::input required="true" label="Objet" name="subject" error_message="Vous devez entrer l'objet" value="{{ old('subject') }}" />
                    @error('subject')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div> 
            </div>

            <div class="flex flex-col">
                <x-bladewind::textarea required="true" label="Contenu" name="content" error_message="Vous devez entrer le contenu" value="{{ old('content') }}" />
                @error('content')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            

            <x-bladewind::button can_submit="true" has_spinner="true" icon="paper-airplane">Créer la campagne</x-bladewind::button>
        </form>
    </x-bladewind::card>

</x-layout>