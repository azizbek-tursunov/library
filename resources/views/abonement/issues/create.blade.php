@extends('abonement.layouts.app')
@section('content')
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('abonement.issue.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label
                        for="book_id" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kitob nomi
                    </label>
                    <select name="book_id"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required>
                        <option value="">Tanlanmagan</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label
                        for="reader_id" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kimga
                    </label>
                    <select name="reader_id"
                            class="w-full rounded-md mb-4 border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required>
                        <option value="">Tanlanmagan</option>
                        @foreach($readers as $reader)
                            <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                        @endforeach
                    </select>
                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Saqlash
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
