<div> {{count($users)}}
    <form wire:submit="createNewUser" action="">
        <input wire:model="name" type="text" name="name" placeholder="name">
        <input wire:model="email" type="email" name="email" placeholder="email">
        <input wire:model="password" type="password" name="password" placeholder="password">
        <button >Create</button>
    </form>
    @foreach($users as $user)
<h3>{{$user->name}}</h3>
    @endforeach
</div>
