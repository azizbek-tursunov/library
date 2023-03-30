@extends('abonement.layouts.app')
@section('content')
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('abonement.reader.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label
                        for="surname" class="mb-3 block text-base font-medium text-[#07074D]">
                        Familyasi
                    </label>
                    <input type="text" name="surname" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Ismi
                    </label>
                    <input type="text" name="name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="middle_name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Otasining ismi
                    </label>
                    <input type="text" name="middle_name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                </div>
                <div class="mb-5">
                    <label
                        for="group" class="mb-3 block text-base font-medium text-[#07074D]">
                        Yo'nalish
                    </label>
                    <select name="major_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                        <option value="">Tanlanmagan</option>
                        @foreach($majors as $major)
                        <option value="{{ $major->id }}">{{ $major->name }}</option>
                        @endforeach
                    </select>
                    <label
                        for="group" class="mb-3 block text-base font-medium text-[#07074D]">
                        Guruh
                    </label>
{{--                    <input type="text" name="group" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>--}}
                    <select name="group_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" required    >
                        <option value="">Tanlanmagan</option>
                        @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Saqlash
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
