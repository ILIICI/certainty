@extends('master')
@section('content')
    @foreach ( $array as $values )
        @if (is_array($values))
        <section class="overflow-hidden text-gray-700 ">
            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
                @foreach ($values as $value )
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{route('url').'/'.$value}}">
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @else
        <div class="grid grid-cols-3 gap-4 w-3/4 m-auto">
            <div class="border-t-4 border-purple-500 pt-4">
                <p class="uppercase text-purple-500 font-bold">{{ $values }}</p>
            </div>
        </div>
        @endif
    @endforeach
@endsection

