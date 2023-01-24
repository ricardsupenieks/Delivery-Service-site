@extends('layout')

@section('content')
    <div class="text-center text-white text-3xl font-bold mt-10">
        Neaktīvie Klienti
    </div>

    <div class="flex flex-col mt-10 w-2/5 mx-auto">
        <div class="relative overflow-x-auto shadow-md">
            <table class="w-full text-sm">
                <thead class="text-xs uppercase bg-gray-50 bg-white">
                <tr>
                    <th scope="col" class="pl-3 py-3 text-center">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Klients
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Piegādes adrese
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($inactiveClients as $key => $inactiveClient)
                        <tr class="bg-white text-gray-700 hover:bg-gray-50">
                            <th scope="row" class="text-center pl-3  py-4 whitespace-nowrap">
                                {{$key + 1}}
                            </th>
                            <td class="px-6 py-4 font-medium text-left">
                                {{$inactiveClient->client->name}}
                            </td>
                            <td class="px-6 py-4 font-medium text-left">
                                {{$inactiveClient->address->title}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
