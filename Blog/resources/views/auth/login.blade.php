@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 my-4 rounded-lg">
            <h1>Register </h1>
            <form action="" method="">
                @csrf
                <div class="mb-4">
                    <label for="username" class="sr-only">UserName</label>
                    <input type="text" name="username" placeholder="Enter UserName" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}">
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" placeholder="Enter password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
               
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                    Login
                
                </button>
            
            </form>
        </div>
    </div>
@endsection