@extends('admin.layouts.app')

@section('title', 'Edit Purchase Order')
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
                      <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Purchase Order</a>
                    </div>
                  </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Purchase Order</h1>
        </div>
    </div>
</div>

<div class="flex flex-col">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form method="POST" action="{{ route('po.update', $po) }}" class="max-w-sm mx-auto my-5">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">PO Code</label>
                <input type="text" name="po_code" value="{{ $po->po_code }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" placeholder="PO.001" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                <input type="text" name="description" value="{{ $po->description }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="status_id" required>
                    <option value="">Choose a status</option>
                    @foreach($statuses as $sts)
                        <option selected value="{{ $sts->id }}">{{ $sts->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Edit Now
            </button>
        </form>
    </div>
</div>

</section>

@endsection






