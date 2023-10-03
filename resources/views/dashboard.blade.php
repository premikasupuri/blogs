<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <center><h1 class="font-semibold text-xl text-gray-800 leading-tight">
        <div><a href="../index">Posts</a></div>
        <div> <a href="../create">Create Post</a></div>
        <div> <a href="../index">Show Post</a></div>
        <div> <a href="../index">Update Post</a></div>
        <div>  <a href="../index">Delete Post</a></div>
        </h1></center>
  
    </x-slot>
   
</x-app-layout>

