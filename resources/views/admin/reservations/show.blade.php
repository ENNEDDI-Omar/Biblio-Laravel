<x-app-layout>

    <h1>admin->page->reservation->show</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Détails de la Réservation</h1>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Utilisateur :</label>
                <p class="text-gray-800 text-lg">{{ $reservation->user->nom }} {{ $reservation->user->prenom }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Livre :</label>
                <p class="text-gray-800 text-lg">{{ $reservation->book->titre }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Date de Réservation :</label>
                <p class="text-gray-800 text-lg">{{ $reservation->date_reservation }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Date de Retour :</label>
                <p class="text-gray-800 text-lg">{{ $reservation->date_retour }}</p>
            </div>
        </div>
        <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Retour à la Liste des Réservations</a>
    </div>
    

    
 
 </x-app-layout>