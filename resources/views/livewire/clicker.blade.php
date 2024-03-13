<div> {{count($users)}}
    @if(session('success'))
       <span class="w-100 py-3 bg-green-600 text-white rounded">{{session('success')}}</span>

    @endif
    <form class="p-5" wire:submit="createNewUser" action="">
        <input class="block rounded border border.gray-100 px-3 py-1 mt-2" wire:model="name" type="text" name="name" placeholder="name">
      <!-- mensagem de erro -->
        @error('name')
        <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror
        <input class="block rounded border border.gray-100 px-3 py-1 mt-2" wire:model="email" type="email" name="email" placeholder="email">
       <!-- mensagem de erro -->
        @error('email')
        <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror
        <input class="block rounded border border.gray-100 px-3 py-1 mt-2" wire:model="password" type="password" name="password" placeholder="password">
        <!-- mensagem de erro -->
        @error('password')
        <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror
        <button class="block rounded  px-3 py-1 bg-gray-400 text-white" >Create</button>
    </form>
    @foreach($users as $user)
<h3>{{$user->name}}</h3>
    @endforeach
    {{$users->links('vendor.livewire.test')}}
</div>
