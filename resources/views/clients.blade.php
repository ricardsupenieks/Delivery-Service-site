@extends('layout')

@section('content')
    <div class="text-center text-3xl text-white mt-10 font-bold">
        Klientu saraksts
    </div>
    @if(!$clients->isEmpty())
        <div class="flex flex-row gap-12 bg-gray-900">
            <div class="w-full h-full h-screen ml-10 mt-10">

                <div class="relative overflow-x-auto shadow-md">
                    <table class="w-full text-sm">
                        <thead class="text-xs uppercase bg-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left">
                                Klienti
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr class="bg-white text-gray-700 hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-left">
                                    {{$client->name}}
                                </td>
                                <td class="px-6 py-4 font-medium text-right text-xs">
                                    <button
                                        id="addresses"
                                        onclick="showAddresses({{$client->id}})"
                                        class="mx-4 py-1 px-2 bg-blue-600 rounded-lg text-white font-bold hover:bg-blue-700"
                                    >
                                        Parādīt adreses
                                    </button>

                                    <a href="/deliveries/{{$client->id}}" type="btn">
                                        <button class="py-1 px-2 bg-blue-600 rounded-lg text-white font-bold hover:bg-blue-700">Atvērt piegādes</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="w-full h-screen mr-10 mt-10">
                <div id="addressesTable" class="hidden">
                    <table class="w-full text-sm">
                        <thead class="text-xs uppercase bg-white w-full">
                        <tr>
                            <th scope="col" class="pl-3 py-3 text-center">
                                Adreses
                            </th>
                            <th>
                            </th>
                        </tr>
                        </thead>
                        <tbody id="addressesBody">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

    <script type="text/javascript">
        function showAddresses(clientId) {
            var addressesBody = document.getElementById("addressesBody")
            var request = new XMLHttpRequest()

            request.open("GET", `/addresses/${clientId}`);
            request.send();

            request.onreadystatechange = function () {
                if (request.readyState === 4 && request.status === 200) {
                    var addresses = JSON.parse(request.responseText)['addresses'];

                    while(addressesBody.firstChild) {
                        addressesBody.removeChild(addressesBody.firstChild);
                    }

                    addresses.forEach((row) => {
                        addressesBody.innerHTML +=`<tr class="bg-white text-gray-700"><td class="px-6 py-3 text-left">`+Object.values(row)[1]+`<td></tr>`
                    });
                }
            }
            $('#addressesTable').toggle();
        }
    </script>
@endsection
