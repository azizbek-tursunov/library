@extends('abonement.layouts.app')
@section('content')
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('abonement.reader.update', ['reader' => $reader->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-5">
                    <label
                        for="surname" class="mb-3 block text-base font-medium text-[#07074D]">
                        Familyasi
                    </label>
                    <input value="{{ $reader->surname }}" type="text" name="surname"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Ismi
                    </label>
                    <input value="{{ $reader->name }}" type="text" name="name"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="middle_name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Otasining ismi
                    </label>
                    <input value="{{ $reader->middle_name }}" type="text" name="middle_name"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="group" class="mb-3 block text-base font-medium text-[#07074D]">
                        Yo'nalish
                    </label>
                    <select name="major_id" required>
                        <option value="">Tanlanmagan</option>
                        @foreach($majors as $major)
                            <option
                                value="{{ $major->id }}" {{ $major->id == $reader->major_id ? 'selected' : '' }}>{{ $major->name }}</option>
                        @endforeach
                    </select>
                    <label
                        for="group" class="mb-3 block text-base font-medium text-[#07074D]">
                        Guruh
                    </label>
                    {{--                    <input type="text" name="group" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>--}}
                    <select name="group_id" required>
                        <option value="">Tanlanmagan</option>
                        @foreach($groups as $group)
                            <option
                                value="{{ $group->id }}" {{ $group->id == $reader->group_id ? 'selected' : '' }}>{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-auto m-2">
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Saqlash
                    </button>
                    <a href="{{ route('abonement.reader.show', ['reader' => $reader->id]) }}"
                       class="hover:shadow-form rounded-md bg-red-500 py-3 px-8 text-base font-semibold text-white outline-none">
                        Bekor qilish
                    </a>
                </div>
            </form>
            <form action="{{ route('abonement.reader.destroy', ['reader' => $reader->id]) }}" method="POST"
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
