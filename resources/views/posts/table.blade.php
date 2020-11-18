@section('title','Admin')
<x-app-layout>
    <x-slot name="header">
        <x-button ><a href="{{url('/posts/create')}}">Tambah Kliping</a></x-button>
    </x-slot>

    @if (session()->has('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
                </div>
                
                <div>
                    <p class="font-bold " >

                        {{session()->get('success')}}
                    </p>
                </div>
            </div>
        </div>
        
    @endif

    
    <div class="py-12 w-24 min-w-full mb-4 ">
        <div class="sm:px-6 lg:px-8  ">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg ">
                
                <div class="flex justify-center p-6 bg-white border-b border-gray-200 ">
                    
                    
                    
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Cover</th>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Sumber</th>
                                <th class="px-4 py-2">Deskripsi</th>
                                <th class="px-4 py-2">Tanggal</th>
                                <th class="px-4 py-2">Tols</th>
                            </tr>
                        </thead>
                        
                        @foreach ($posts as $post)
                        <tbody>
                            <tr>
                                    <td class="border px-4 py-2">{{$post->cover}}</td>
                                    <td class="border px-4 py-2">{{$post->title}}</td>
                                    <td class="border px-4 py-2">{{$post->sumber}}</td>
                                    <td class="border px-4 py-2">{{Str::limit($post->body, 100)}}</td>
                                    <td class="border px-4 py-2">{{$post->tanggal}}</td>
                                
                                    <td class="border px-4 py-2">
                                        
                                        <x-button ><a href="/posts/{{$post->slug}}/edit">Edit</a></x-button>
                                        <form action="/posts/{{$post->slug}}/delete" method="post">
                                            @csrf
                                            @method('delete')
                                            <x-button onclick="return confirm('Yakin menghapus kliping?')">Hapus</x-button>

                                        </form>
                                    </td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                    </table>
                </div>
                
                <div class="py-4" >
                    <div class="px-5">
                        
                        <p>{{ $posts->links() }}</p>
                        <p></p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
