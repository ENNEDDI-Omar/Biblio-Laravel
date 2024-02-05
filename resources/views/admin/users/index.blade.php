<x-app-layout>

   <h1>admin->page-users</h1>

   <div class="container mx-auto">
    <h1 class="text-2xl font-bold my-4">Liste des Utilisateurs</h1>
    <div class="mb-4">
        <a href="{{ route('admin.users.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Ajouter un Utilisateur</a>
    </div>
    <table class="w-full border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="p-2 border border-gray-400">#</th>
                <th class="p-2 border border-gray-400">Nom</th>
                <th class="p-2 border border-gray-400">Prénom</th>
                <th class="p-2 border border-gray-400">Email</th>
                <th class="p-2 border border-gray-400">Téléphone</th>
                <th class="p-2 border border-gray-400">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="p-2 border border-gray-400">{{ $user->id }}</td>
                <td class="p-2 border border-gray-400">{{ $user->nom }}</td>
                <td class="p-2 border border-gray-400">{{ $user->prenom }}</td>
                <td class="p-2 border border-gray-400">{{ $user->email }}</td>
                <td class="p-2 border border-gray-400">{{ $user->tel }}</td>
                <td class="p-2 border border-gray-400">
                    <a href="{{ route('admin.users.show', $user->id) }}" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Voir</a>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</x-app-layout>