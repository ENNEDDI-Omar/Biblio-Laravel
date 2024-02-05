<x-app-layout>

    <h1>admin->page-reservations</h1>

    <div class="container mx-auto">
    <h1 class="text-2xl font-bold my-4">Liste des Réservations</h1>
    <div class="mb-4">
        <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Ajouter une Réservation</a>
    </div>
    <table class="w-full border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="p-2 border border-gray-400">#</th>
                <th class="p-2 border border-gray-400">Utilisateur</th>
                <th class="p-2 border border-gray-400">Livre</th>
                <th class="p-2 border border-gray-400">Date de Réservation</th>
                <th class="p-2 border border-gray-400">Date de Retour</th>
                <th class="p-2 border border-gray-400">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td class="p-2 border border-gray-400">{{ $reservation->id }}</td>
                <td class="p-2 border border-gray-400">{{ $reservation->user->nom }} {{ $reservation->user->prenom }}</td>
                <td class="p-2 border border-gray-400">{{ $reservation->book->titre }}</td>
                <td class="p-2 border border-gray-400">{{ $reservation->date_reservation }}</td>
                <td class="p-2 border border-gray-400">{{ $reservation->date_retour }}</td>
                <td class="p-2 border border-gray-400">
                    <a href="{{ route('admin.reservations.show', $reservation->id) }}" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Voir</a>
                    <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</a>
                    <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

 
 </x-app-layout>