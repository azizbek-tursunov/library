@extends('abonement.layouts.app')
@section('content')
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('abonement.book.update', ['book' => $book->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-5">
                    <label
                        for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kitob nomi
                    </label>
                    <input value="{{ $book->name }}" type="text" name="name"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                           required/>
                </div>
                <div class="mb-5">
                    <label
                        for="author" class="mb-3 block text-base font-medium text-[#07074D]">
                        Avtori
                    </label>
                    <input value="{{ $book->author }}" type="text" name="author"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                           required/>
                </div>
                <div class="mb-5">
                    <label for="genre_id" class="mb-3 block text-base font-medium text-black">
                        Janri
                    </label>
                    <select name="genre_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                        <option value="">Tanlanmagan</option>
                        @foreach($genres as $genre)
                            <option
                                value="{{ $genre->id }}" {{ $genre->id == $book->genre_id ? 'selected' : '' }}>{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="status" class="mb-3 block text-base font-medium text-black">
                        Holati
                    </label>
                    <input value="{{ $book->status }}" type="text" name="status"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                           required/>
                </div>
                <div class="mb-5">
                    <label
                        for="about" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kitob haqida
                    </label>
                    <textarea name="about" rows="5"
                              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                              required>{{ $book->about }}</textarea>
                </div>
                <div class="flex-auto m-2">
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Saqlash
                    </button>
                    <a href="{{ route('abonement.book.show', ['book' => $book->id]) }}"
                       class="hover:shadow-form rounded-md bg-red-500 py-3 px-8 text-base font-semibold text-white outline-none">
                        Bekor qilish
                    </a>
                </div>
            </form>
            <form action="{{ route('abonement.book.destroy', ['book' => $book->id]) }}" method="POST"
                  onsubmit="return confirm('Rostdan ham o\'chirishni istaysizmi?');">
                @csrf
                @method('DELETE')
                <button
                    class="hover:shadow-form rounded-md bg-black py-3 px-8 text-base font-semibold text-white outline-none ml-4">
                    O'chirish
                </button>
            </form>
        </div>
    </div>
@endsection
