{{-- cover --}}
<div>
    <x-label for="cover" :value="__('Cover')" />

    <input id="cover" value="{{old('cover') ?? $post->cover}}" style="width: 560px;" type="file" name="cover"  />
</div>


<!-- title -->
<div class="mt-4">
    <x-label for="title" :value="__('Title')" />
    <x-input id="title" style="width: 560px;" value="{{old('title') ?? $post->title}}" class="block mt-1 w-full" type="text" name="title" required />
</div>


<div class="mt-4" >
    <x-label for="sumber" :value="__('Sumber')" />
    <select id="sumber" style="width: 560px;"  class="form-select rounded-md shadow-sm" type="text" name="sumber" required>
        <option disabled selected >Pilih Sumber</option>
        <option value="Mata Banua">Mata Banua</option>
        <option value="Kalsel Pos">Kalsel Pos</option>
        <option value="Barito Pos">Barito Pos</option>
        <option value="Kalimantan Pos">Kalimantan Pos</option>
        <option value="Radar Banjarmasin">Radar Banjarmasin</option>
    </select>
    
</div>

<div class="mt-4">
    <x-label for="body" :value="__('Deskripsi')" />
    <textarea value="{{old ('body') ?? $post->body}}" style="width: 560px;" id="body" class="form-input rounded-md shadow-sm"  type="text" name="body" cols="3" rows="3"></textarea>
</div>

<div class="mt-4">
    <x-label for="tanggal" :value="__('Tanggal')" />
    <x-input id="tanggal" class="block mt-1 w-full" style="width: 560px;" value="{{old ('tanggal') ?? $post->tanggal}}" type="date" name="tanggal" required />
</div>


{{-- <!-- cover -->

<div>
    <x-label for="kliping" :value="__('Kliping')" />

    <x-input id="kliping" class="block mt-1 w-full" type="file" name="kliping" required autofocus />
</div>
    --}}


<div class="flex items-center justify-center mt-10 ">
    <x-button>
        {{ $submit ?? 'Rubah'}}
    </x-button>
</div>
