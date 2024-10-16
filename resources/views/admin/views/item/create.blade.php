@extends('admin.layouts.app')

@section('title', 'Add Item')
@section('content')

<section>
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                  <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                      <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Master Data
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Item</a>
                    </div>
                  </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Item</h1>
        </div>
    </div>
</div>

<div class="flex flex-col">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form method="POST" action="{{ route('item.store') }}" class="max-w-sm mx-auto my-5">
            @csrf
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Item Category</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="category_id" required>
                    <option value="" selected>Choose a category</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Item Code</label>
                <input type="text" name="item_code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" placeholder="BER.001" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                <input type="text" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                <input type="number" name="stock" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                <input type="number" name="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Min Stock</label>
                <input type="number" name="min_stock" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Max Stock</label>
                <input type="number" name="max_stock" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" required />
            </div>
            <button type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Create Now
            </button>
        </form>
    </div>
</div>
</section>

@endsection






