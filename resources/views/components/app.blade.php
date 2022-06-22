<x-master>

    <section class="mb-8 mt-4">
        <main class="container mx-auto">

            <div class="lg:flex justify-between items-stretch w-full">

                @if(auth()->user())
                    <div class="sm:mb-2 mb-4 lg:mb-0 lg:w-1/5 lg:mr-4 text-sm">
                        @include('_sidebar-links')
                    </div>
                
                    <div class="lg:flex lg:w-4/5 lg:shadow bg-white mx-auto p-4">
                        {{ $slot }}
                    </div>
                @endif

            </div>

        </main>
    </section>

</x-master>