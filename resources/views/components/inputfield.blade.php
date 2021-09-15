<div {{ $attributes->merge(['class'=>'w-full px-3'])}} ">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
    {{ $inputlabel }}
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full" id="{{ $id }}" name="{{ $name }}"laceholder="{{$placeholder}}">
</div>