@extends('abonement.layouts.app')
@section('content')

    <!-- component -->
    <div class="bg-white p-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-600 font-semibold">Barcha kitobxonlar</h2>
                <span class="text-xs">Jami: <strong>{{ $readers->count() }}</strong> ta</span>
            </div>
            <div class="flex items-center justify-between">

                <div class="lg:ml-40 ml-10 space-x-8">
                    <a href="{{ route('abonement.reader.create') }}"
                       class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        Yangi kitobxon qo'shish
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
                                Familiyasi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Ismi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Otasining ismi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Yo'nalishi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Guruhi
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Tahrirlash
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($readers as $reader)

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $reader->surname }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $reader->name }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $reader->middle_name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $reader->major->name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap uppercase">
                                        {{ $reader->group->name }}
                                    </p>
                                </td>
                                <td>
                                    <a href="{{ route('abonement.reader.show', ['reader' => $reader->id]) }}"
                                       class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                                        Ko'rish
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">

                        <div class="inline-flex mt-2 xs:mt-0">
                            {{--                            // pagination--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
