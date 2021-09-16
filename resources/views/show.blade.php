@extends('master')

    @section('content')
    <div class="container mx-auto px-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name:
        <p class="text-red-700">{{ $data->_name }}</p>
      </label>
    
    <br>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="surname">
        Surname:
        <p class="text-red-700">{{ $data->_surname }}</p>
      </label>
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
        Address:
        <p class="text-red-700">{{ $data->_address }}</p>
      </label>
    <br>
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
        Description: 
        <p class="text-red-700">{{ $data->_description }}</p>
      </label>
    <br>
   
     
    <div class="container mx-auto px-4"> 
                
      <section class="py-8 px-4">
        <div class="flex flex-wrap -mx-4 -mb-8">
        @foreach ($data->getImageModels as $image)
            <div class="md:w-1/4 px-4 mb-8">
                 <img class="rounded shadow-md" src="{{route('url').'/'.$image['_image_path']}}" alt="Image from DB">
            </div> 
        @endforeach
        </div>
      </section>
    </div>

</div>



    @endsection

