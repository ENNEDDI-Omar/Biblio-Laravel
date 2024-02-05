<x-app-layout>

    <h1>admin->page-reservations->creat</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Créer une Réservation</h1>
        <form action="{{ route('admin.reservations.store') }}" method="POST" class="w-full max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">Utilisateur</label>
                <select name="user_id" id="user_id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    <option value="">Sélectionnez un utilisateur</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="book_id" class="block text-gray-700 text-sm font-bold mb-2">Livre</label>
                <select name="book_id" id="book_id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    <option value="">Sélectionnez un livre</option>
                    @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->titre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="date_reservation" class="block text-gray-700 text-sm font-bold mb-2">Date de Réservation</label>
                <input type="date" name="date_reservation" id="date_reservation" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="date_retour" class="block text-gray-700 text-sm font-bold mb-2">Date de Retour</label>
                <input type="date" name="date_retour" id="date_retour" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Créer la Réservation</button>
            </div>
        </form>
    </div>
    

    
 
 </x-app-layout>