@extends('layouts.sidebar')
@section('main')
<div class="w-full">
    <div class="text-black font-bold py-3 px-5">Add New leaves
        <a href="{{ route('leave.index') }}">
        <button class="bg-blue-600 text-white py-2 px-4 font-bold rounded-full float-right">
            Go Back
        </button>
        </a>
    </div>
</div>

<form method="POST" action="{{ route('leave.update',$leave) }}">
    @csrf
    @method('put')
   

    <!-- Name -->
    <div>
        <x-label for="subject" :value="__('subject')" />
        <input type="text" name="subject" id="subject" value= "{{ $leave->subject }}" class="w-full rounded-md">
    </div>


   

<div class="pt-3">
    <button class="bg-blue-500 py-2 px-4 rounded-md pt-4 ">Save</button>
</div>
    
    </div>
</form>
@endsection
