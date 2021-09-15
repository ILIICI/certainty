<div>
	<label for="about" class="block text-sm font-medium text-gray-700">
	{{ $toplabel }}
	</label>
	<div class="mt-1">
		<textarea id="{{ $id }}" name="{{ $name }}" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ $placeholder }}"></textarea>
	</div>
	<p class="mt-2 text-sm text-gray-500">
		{{ $bottomlabel }}
	</p>
</div>