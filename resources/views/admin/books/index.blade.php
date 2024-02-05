<x-app-layout>

    <h1>admin->page-books</h1>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">Liste des Livres</h1>
        <div class="mb-4">
            <a href="{{ route('admin.books.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Ajouter un Livre</a>
        </div>
        <table class="w-full border-collapse border border-gray-400">
            <thead>
                <tr>
                    <th class="p-2 border border-gray-400">#</th>
                    <th class="p-2 border border-gray-400">Couverture</th>
                    <th class="p-2 border border-gray-400">Titre</th>
                    <th class="p-2 border border-gray-400">Genre</th>
                    <th class="p-2 border border-gray-400">Date de Publication</th>
                    <th class="p-2 border border-gray-400">Copies Totales</th>
                    <th class="p-2 border border-gray-400">Copies Disponibles</th>
                    <th class="p-2 border border-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td class="p-2 border border-gray-400">{{ $book->id }}</td>
                    <td class="p-2 border border-gray-400">
                        <img src="{{ asset('storage/' . $book->couverture) }}" alt="{{ $book->titre }}" class="w-16 h-16 object-cover">
                    </td>
                    <td class="p-2 border border-gray-400">{{ $book->titre }}</td>
                    <td class="p-2 border border-gray-400">{{ $book->genre }}</td>
                    <td class="p-2 border border-gray-400">{{ $book->date_publication }}</td>
                    <td class="p-2 border border-gray-400">{{ $book->total_copies }}</td>
                    <td class="p-2 border border-gray-400">{{ $book->copies_dispo }}</td>
                    <td class="p-2 border border-gray-400">
                        <a href="{{ route('admin.books.show', $book->id) }}" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Voir</a>
                        <a href="{{ route('admin.books.edit', $book->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</a>
                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
 </x-app-layout>