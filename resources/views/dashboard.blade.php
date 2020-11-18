@section('title','Admin')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  ">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-10 px-16 rounded  mr-8">
                            <a href="{{ url('/posts/add') }}">E-Kliping</a>
                            <p>I Ready</p>
                        </button>

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-10 px-16 rounded mr-8">
                            <a href="#">Galery</a>
                            <p>Coming Soon</p>
                        </button>

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-10 px-16  rounded ">
                            <a href="#">Balangan News</a>
                            <p>Coming Soon</p>
                        </button>
            
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
