<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Liste des Clients</h1>
        <a href="{{ route('clients.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">+ Ajouter un Client</a>
    </div>

    <div class="mb-4">
        <input type="text" wire:model="search" placeholder="Rechercher un client..." class="w-full p-2 border border-gray-300 rounded-lg">
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-auto">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">Nom</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Téléphone</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $client->nom }}</td>
                    <td class="px-4 py-2">{{ $client->email }}</td>
                    <td class="px-4 py-2">{{ $client->telephone }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('clients.edit', $client->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="mt-4">
        {{ $clients->links() }}
    </div> --}}
</div>