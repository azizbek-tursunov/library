@extends('abonement.layouts.app')
@section('content')

    <!-- component -->
    <div class="bg-white p-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                Qo'ldagi kitoblar ro'yhati
            </div>
            <div class="flex items-center justify-between">

                <div class="lg:ml-40 ml-10 space-x-8">
                    <a href="{{ route('abonement.issue.create') }}"
                       class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        Kitob berish
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Yo'nalishi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Ismi va Familiyasi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Kitob nomi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Topshirilgan sana
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Qaytarilgan sana
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Amal
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($issues as $issue)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $issue->reader->major->name }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $issue->reader->surname }} {{ $issue->reader->name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $issue->book->name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $issue->issue_date->format('d M Y')}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap uppercase">
                                        @if($issue->return_date == null)
                                            <span class="bg-red-500 rounded-full inline-block w-3 h-3 mr-2"></span>
                                            <span class="text-red-500 font-bold text-sm">Qaytarilmagan</span>
                                        @else
                                            <span class="text-green-600 font-bold text-sm">
                                                {{ $issue->return_date->format('d M Y') }}
                                            </span>
                                        @endif
                                    </p>
                                </td>
                                @if($issue->return_date == null)
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('abonement.issue.edit', ['issue' => $issue->id]) }}"
                                           class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide
                                cursor-pointer">
                                            Qabul qilib olish
                                        </a>
                                    </td>
                                @else
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div>
                                            {{ $issue->book_condition }}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <div class="inline-flex mt-2 xs:mt-0">
                            {{--// pagination--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

