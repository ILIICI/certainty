@extends('master')
@section('content')
<div class="mt-5 md:mt-0 md:col-span-2">
    <x-success/>
    <x-failed/>
    <x-errors/>
    <form action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <x-inputfield class="md:w-1/2" 
                        id="name" 
                        name="name" 
                        inputlabel="Name" 
                        placeholder="name"/>
                    <x-inputfield class="md:w-1/2" 
                        id="surname" 
                        name="surname" 
                        inputlabel="Surname" 
                        placeholder="surname"/>
                    <x-inputfield class="py-2" 
                        id="address" 
                        name="address" 
                        inputlabel="Address" 
                        placeholder="address"/>
                </div>
                <x-textarea     id="description" 
                    name="description"
                    toplabel="Description" 
                    placeholder="Write your notes - up to 200 characters"
                    bottomlabel="This is a brief description"/>
                <x-uploadfield id="fileupload" name="fileupload[]"/>
            </div>
            <x-button text="SUBMIT"/>
        </div>
    </form>
</div>
</div>
</div>
@endsection