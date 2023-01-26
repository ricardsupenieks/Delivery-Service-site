@extends('layout')

@section('content')
    <div class="text-center text-3xl text-white mt-10 font-bold">
        Pasūtījumu tipi
    </div>

    @if(!empty($types))
        <div class="flex flex-col mt-10 w-2/5 mx-auto">
            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full text-sm">
                    <thead class="text-xs uppercase bg-gray-50 bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left">
                            Klients
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Adrese
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($types as $type)
                        <tr class="bg-white text-gray-700 hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-left">
                                {{$type["client"]}}
                            </td>
                            <td class="px-6 py-4 font-medium text-left">
                                {{$type["address"]}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
