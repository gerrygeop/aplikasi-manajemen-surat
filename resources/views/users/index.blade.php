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
                <i class="w-6 mr-2" data-feather="users"></i>
                Pengguna
            </h1>
            <a 
                href="{{ route('users.create') }}" 
                class="bg-indigo-400 text-white rounded-lg px-4 py-2 text-sm hover:bg-indigo-600 flex items-center"
            >
                <i class="w-4 mr-1" data-feather="plus-circle"></i>
                Tambah User
            </a>
        </div>
        <hr>
    </div>


    <table class="table-auto w-full mx-auto">
        <thead>
            <tr class="text-left text-sm border-b border-indigo-500">
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Jabatan</th>
                <th class="px-4 py-2">Bidang</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $user)
                @if(!$user->isAdmin())
                    <tr class="border-b">
                        <td class="px-4 py-2">
                            {{ $user['name'] }}
                        </td>
                        <td class="px-4 py-2">
                            @foreach($user->roles as $role)
                                {{ $role->role_name }}
                            @endforeach
                        </td>
                        <td class="px-4 py-2">
                            @if ($user->bidang_id != null)
                                {{ $user->bidang->nama_bidang }}
                            @else
                                <p></p>
                            @endif
                        </td>

                        <td class="px-4 py-2 text-white text-sm">
                            
                                <div class="flex items-center">
                                    
                                    <a href="{{ route('users.edit', $user->id) }}" class="text-sm bg-blue-500 rounded px-2 mr-1">
                                        <i class="w-4" data-feather="edit"></i>
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="flex">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="bg-red-500 rounded px-2">
                                            <i class="w-4" data-feather="trash-2"></i>
                                        </button>
                                    </form>
                                </div>
                        </td>
                    </tr>
                @endif
            @endforeach

        </tbody>
    </table>

</div>

</x-app>