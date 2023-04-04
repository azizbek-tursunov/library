@extends('admin.layouts.app')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-wrap mb-2">
                        <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2">
                            <div class="bg-green-600 border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pl-1 pr-4"><i
                                            class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                                    <div class="flex-1 text-right">
                                        <h5 class="text-white">Bugun tashrif buyurganlar</h5>
                                        <h3 class="text-white text-3xl">{{ $readersToday }}<span class="text-green-400"><i
                                                    class="fas fa-caret-down"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2">
                            <div class="bg-blue-600 border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pl-1 pr-4"><i
                                            class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                                    <div class="flex-1 text-right">
                                        <h5 class="text-white">Bu oyda tashrif buyurganlar</h5>
                                        <h3 class="text-white text-3xl">{{ $readersMonth }}<span
                                                class="text-blue-400"><i
                                                    class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2 xl:pr-3 xl:pl-1">
                            <div class="bg-orange-600 border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pl-1 pr-4"><i
                                            class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                                    <div class="flex-1 text-right pr-1">
                                        <h5 class="text-white">Eng faol guruh</h5>
                                        <h3 class="text-white text-3xl">{{ $group->name }}<span class="text-orange-400"><i
                                                    class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Xodimlar Ro'yxati
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ismi
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Lavozimi
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $user->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $user->role->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $user->email }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
