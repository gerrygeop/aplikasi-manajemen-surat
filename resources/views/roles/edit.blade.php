<x-app>

<div class="w-full">

    <div class="text-indigo-500 font-medium py-1 mb-4 border-b">
        <i>Edit Role</i>
    </div>

    <form method="POST" action="{{ route('roles.update', $role['id']) }}" class="bg-gray-100 rounded px-8 pt-6 pb-6 mb-4">
        @csrf
        @method('PATCH')

        <div class="w-full flex flex-wrap">
            <div class="mb-6 md:w-1/2 pr-3">

                <label for="role_name" class="block text-gray-700 text-sm font-bold mb-2">
                    Nama Role
                </label>

                <input 
                    id="role_name" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('role_name') is-invalid @enderror" 
                    name="role_name" 
                    value="{{ $role->role_name }}" 
                    required 
                    autocomplete="role_name"
                    placeholder="Nama Role" 
                >

                @error('role_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-4 md:w-1/2">

                <label for="permissions" class="block text-gray-700 text-sm font-bold mb-2">
                    Permission
                </label>
                
                <div class="relative">
                    <select 
                        class="js-example-basic-multiple w-full @error('permissions') is-invalid @enderror" 
                        id="permissions" 
                        name="permissions[]"
                        data-placeholder="Pilih Hak akses"
                        multiple 
                    >
                        @foreach($permissions as $permission)
                            <option 
                                value="{{$permission->id}}" 
                                @foreach ($role->permissions as $value)
                                    {{ $value->id == $permission->id ? "selected":'' }}
                                @endforeach
                            >
                                {{ $permission->permission_name }}
                            </option>
                        @endforeach

                    </select>
                    
                </div>

                @error('permissions')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>
        </div>

        <div class="mb-12">

                <label for="label" class="block text-gray-700 text-sm font-bold mb-2">
                    Keterangan <small class="text-gray-600">(Optional)</small>
                </label>

                <input 
                    id="label" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('label') is-invalid @enderror" 
                    name="label" 
                    value="{{ $role->label }}"
                    autocomplete="label"
                    placeholder="Keterangan" 
                >

                @error('label')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>


        <div class="mb-1">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Update
            </button>
        </div>
        
    </form>

</div>

</x-app>