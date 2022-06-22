<x-master>

<div class="w-full max-w-lg m-auto mt-6 px-4 sm:px-4 lg:px-0 sm:mt-12 lg:mt-24">

    <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-8 pb-8">
        @csrf

        <div class="mb-6">

            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                Username
            </label>
            
            <input 
                id="email" 
                type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
                autofocus
                placeholder="Username"
            >

            @error('email')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
            
        </div>

        <div class="mb-8">

            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                Password
            </label>
            
            <input 
                id="password" 
                type="password" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" 
                name="password" 
                required
                placeholder="Password" 
            >

            @error('password')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
            
        </div>

        <div class="flex items-center justify-between">
            <button 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                type="submit"
            >
                Login
            </button>
        </div>

    </form>
                
</div>

</x-master>
