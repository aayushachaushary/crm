@extends('layouts.sidebar')
@section('main')
<div class="w-full">
    <div class="text-black font-bold py-3 px-5">Add New Airlines
        <a href="{{ route('airline.index') }}">
        <button class="bg-blue-600 text-white py-2 px-4 font-bold rounded-full float-right">
            Go Back
        </button>
        </a>
    </div>
</div>

<form method="POST" action="{{ route('airline.update',$airline) }}">
    @csrf
    @method('put')
   

    <!-- Name -->
    <div>
        <x-label for="title" :value="__('Title')" />
        <input type="text" name="title" id="title" value= "{{ $airline->title }}" class="w-full rounded-md">
    </div>

    <div>
        <x-label for="type" :value="__('Type')" />
        <input type="text" name="type" id="type" value= "{{ $airline->title }}" class="w-full rounded-md">
    </div>


   

<div class="pt-3">
    <button class="bg-blue-500 py-2 px-4 rounded-md pt-4 ">Save</button>
</div>
    
    </div>
</form>
@endsection
