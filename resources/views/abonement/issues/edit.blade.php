@extends('abonement.layouts.app')
@section('content')
    <!-- component -->
    <style>
        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="bg-gray-100">
        <div class="container mx-auto my-5 p-5 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </span>
                            <span class="tracking-wide">Kitob haqida ma'lumot</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="text-lg">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Kitob nomi</div>
                                    <div class="px-4 py-2">{{ $issue->book->name }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">O'quvchi ismi va familiyasi</div>
                                    <div
                                        class="px-4 py-2">{{ $issue->reader->surname }} {{ $issue->reader->name }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Qachon olingan</div>
                                    <div class="px-4 py-2">{{ $issue->issue_date->format('d M Y') }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Topshirilyapdi</div>
                                    <div class="px-4 py-2">{{ now()->format('d M Y') }}</div>
                                </div>
                            </div>
                            <form action="{{ route('abonement.issue.update', ['issue' => $issue->id]) }}"
                                  method="POST"
                                  onsubmit="return confirm('O\'zgarishlar saqlansinmi?');">
                                @csrf
                                @method('PUT')
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold text-lg">Qo'shimcha</div>
                                    <div class="px-4 py-2"><textarea name="book_condition" class="w-full rounded-md border border-[#e0e0e0]
                                              bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                    </div>
                                </div>
                                <button
                                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                    Saqlash
                                </button>
                                <a href="{{ route('abonement.issue.index') }}"
                                   class="hover:shadow-form rounded-md bg-red-500 py-3 px-8 text-base font-semibold text-white outline-none ml-4">
                                    Ortga qaytish
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="my-4"></div>
            </div>
        </div>
    </div>
    </div>
@endsection
