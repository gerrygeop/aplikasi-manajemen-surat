<x-app>

<div class="container">

    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="mb-4 font-bold w-auto">
        <div class="flex justify-between items-center mb-2">
            <h1 class="flex text-lg text-indigo-600">
                <i class="w-6 mr-2" data-feather="shield"></i>
                Roles
            </h1>
            <a 
                href="{{ route('roles.create') }}" 
                class="bg-indigo-400 text-white rounded-lg px-4 py-2 text-sm hover:bg-indigo-600 flex items-center"
            >
                <i class="w-4 mr-1" data-feather="plus-circle"></i>
                Tambah Role
            </a>
        </div>
        <hr>
    </div>

    
    <table class="table-auto w-full mx-auto">
        <thead>
            <tr class="text-sm text-left border-b border-indigo-500">
                <th class="w-1/4 px-4 py-2">Nama</th>
                <th class="w-1/4 px-4 py-2">Keterangan</th>
                <th class="w-1/4 px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>

            @foreach($roles as $role)
                <tr class="border-b">

                    <td class="px-4 py-2">
                        {{ $role->role_name }}
                    </td>
                    <td class="px-4 py-2">
                        @if($role->label != null)
                            {{ $role->label }}
                        @else
                            <small class="text-gray-500"><i>Tanpa Keterangan</i></small>
                        @endif
                    </td>

                    <td class="px-4 py-2 text-white text-sm">
                        <div class="flex">
                            <a href="{{ route('roles.edit', $role->id) }}" class="bg-blue-500 rounded px-2 mr-1 flex items-center">
                                <i class="w-4 mr-1" data-feather="edit"></i>
                                Edit
                            </a>

                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="bg-red-500 rounded px-2 flex items-center">
                                    <i class="w-4 mr-1" data-feather="trash-2"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

</div>

</x-app>