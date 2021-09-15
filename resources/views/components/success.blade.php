@if (session('success'))
  <div role="success">
    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
    <a href="{{ url('view') }}/{{ session('link') }}">{{ url('view') }}/{{ session('link') }}</a>
    </div>
    <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
      <p>{{ session('success') }}</p>
    </div>
  </div>
@endif