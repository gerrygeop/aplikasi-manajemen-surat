<div class="bg-white pt-6 pb-2 border-b lg:shadow lg:border-white">
	
	<ul class="font-bold">
		
		<li class="hover:bg-indigo-600 hover:text-white">
			<a href="{{ route('home') }}" class="flex items-center py-1 mx-6 mb-3 block">
				@if(!auth()->user()->isAdmin())
					<i class="w-4 mr-2" data-feather="inbox"></i>
			        Inbox
			    @else
				    <i class="w-4 mr-2" data-feather="home"></i>
					Home
			    @endif
			</a>
		</li>

		<hr class="mb-4">
		
		@can('edit_master')
			<li class="hover:bg-indigo-600 hover:text-white">
				<a 
					href="{{ route('users.index') }}" 
					class="flex items-center py-1 mx-6 mb-3 block"
				>
					<i class="w-4 mr-2" data-feather="users"></i>
					Users
				</a>
			</li>

			<li class="hover:bg-indigo-600 hover:text-white">
				<a 
					href="{{ route('roles.index') }}" 
					class="flex items-center py-1 mx-6 mb-3 block"
				>
					<i class="w-4 mr-2" data-feather="shield"></i>
					Jabatan
				</a>
			</li>

			<li class="hover:bg-indigo-600 hover:text-white">
				<a 
					href="{{ route('bidang.index') }}" 
					class="flex items-center py-1 mx-6 mb-3 block"
				>
					<i class="w-4 mr-2" data-feather="briefcase"></i>
					Bidang
				</a>
			</li>

			<hr class="mb-4">
		@endcan


		@can('edit_surat')
			<li class="hover:bg-indigo-600 hover:text-white">
	            <a 
	            	href="{{ route('surat_masuk.index') }}" 
	            	class="flex items-center py-1 mx-6 mb-3 block"
	            >
					<i class="w-4 mr-2" data-feather="mail"></i>
					Surat Masuk
				</a>
			</li>

			<li class="hover:bg-indigo-600 hover:text-white">
				<a 
					href="{{ route('sifatsurat.index') }}"
					class="flex items-center py-1 mx-6 mb-3 block"
				>
					<i class="w-4 mr-2" data-feather="bookmark"></i>
					Sifat Surat
				</a>
			</li>

			<hr class="mb-4">
		@endcan

		<li class="hover:bg-red-600 hover:text-white px-2">
			<form action="{{ route('logout') }}" method="POST" class="mb-2 mx-4">
				@csrf
				<button 
					type="submit" 
					class="flex items-center font-bold w-full py-1 block">
					<i class="w-4 mr-2" data-feather="log-out"></i>
					Logout
				</button>
			</form>
		</li>

	</ul>

</div>