@extends('layouts.app')

@section('content')
<div class="min-w-full min-h-screen bg-off-white pt-10">
    <a class="text-indigo no-underline p-10" href="/"><i class="fa fa-chevron-left"></i> Back to Home</a>
    <div class="rounded shadow-md p-6 bg-white w-1/4 m-auto mt-10">
        <h1 class="mb-5 font-sans">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <label for="email" class="text-sm text-grey uppercase tracking-wide">Email</label>
        <input class="p-3 mt-1 mb-5 shadow-inner rounded border border-grey-lighter w-full focus:outline-none" id="email" type="email" name="email" required autofocus />

        <label for="password" class="text-sm text-grey uppercase tracking-wide">Password</label>
        <input id="password" type="password" class="p-3 mt-1 mb-5 shadow-inner rounded border border-grey-lighter w-full focus:outline-none {{ $errors->has('password') ? 'border-red bg-red-lightest' : '' }}" name="password" required>

        <label for="password_confirmation" class="text-sm text-grey uppercase tracking-wide">Confirm Password</label>
        <input id="password_confirmation" type="password" class="p-3 mt-1 mb-5 shadow-inner rounded border border-grey-lighter w-full focus:outline-none {{ $errors->has('password_confirmation') ? 'border-red bg-red-lightest' : '' }}" name="password_confirmation" required>

        <button type="submit" class="button">Register</button>
</form>
    </div>
</div>
@endsection
