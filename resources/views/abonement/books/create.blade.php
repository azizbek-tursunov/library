@extends('abonement.layouts.app')
@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('abonement.book.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label
                        for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kitob nomi
                    </label>
                    <input type="text" name="name"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                           required/>
                </div>
                <div class="mb-5">
                    <label
                        for="author" class="mb-3 block text-base font-medium text-[#07074D]">
                        Avtori
                    </label>
                    <input type="text" name="author"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                           required/>
                </div>
                <div class="mb-5">
                    <label for="genre_id" class="mb-3 block text-base font-medium text-[#07074D]">
                        Janri
                    </label>
                    <select name="genre_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                        <option value="">Tanlanmagan</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label
                        for="status" class="mb-3 block text-base font-medium text-[#07074D]">
                        Soni
                    </label>
                    <input type="text" name="status" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="about" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kitob haqida
                    </label>
                    <textarea name="about" rows="5"
                              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                              required></textarea>
                </div>
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
