<x-app>

<div class="container">

    @if(!auth()->user()->isAdmin())
		<livewire:inbox-user></livewire:inbox-user>

    @else
        <p>Hellow</p>
        
    @endif
    
</div>

</x-app>