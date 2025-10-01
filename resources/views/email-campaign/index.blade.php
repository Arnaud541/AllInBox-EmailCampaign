<x:layout>
    <x-bladewind::notification />

    @if (session('success'))
        <script>
            // Initialisation de la notification après chargement de la page
            window.addEventListener('load', function() {
                showNotification('{{ session('success') }}', 'Action réussie', 'success', 3);
            });
        </script>
    @endif
    @if (session('error') || isset($error))
        <script>
            // Initialisation de la notification après chargement de la page
            window.addEventListener('load', function() {
                showNotification('{{ session('error') ?? $error }}', 'Erreur de chargement', 'error', 3);
            });
        </script>
    @endif

    <h1 class="text-center text-2xl font-bold mb-4">Liste des campagnes email</h1>
    
    <x-bladewind::button onclick="window.location='{{ route('email-campaign.create') }}'" icon="plus-circle" class="mb-4">Créer une nouvelle campagne</x-bladewind::button>
    
    @if($emailsCampaigns && count($emailsCampaigns) > 0)
        <x-bladewind::table has_border="true" divider="thin" celled="true">
            <x-slot name="header">
                <th>Titre</th>
                <th>Objet</th>
                <th>Contenu</th>
            </x-slot>
            @foreach($emailsCampaigns as $campaign)
                <tr>
                    <td>{{ $campaign["name"] }}</td>
                    <td>{{ $campaign["subject"] }}</td>
                    <td>{{ $campaign["htmlContent"] }}</td>
                </tr>
            @endforeach
        </x-bladewind::table>
    @else
        <p>Aucune campagne email trouvée.</p>
    @endif
</x:layout>