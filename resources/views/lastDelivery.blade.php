@extends('layout')

@section('content')
    <div class="text-center text-white text-3xl font-bold mt-10">
        Pēdējā piegāde
    </div>

    @if(!$lastDeliveries->isEmpty())
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
                        <th scope="col" class="px-6 py-3 text-center">
                            Piegādes adrese
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Prece
                        </th>
                        <th scope="col" class="px-6 py-3 text-right">
                            Preču summa
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lastDeliveries as $key => $delivery)
                        @foreach($delivery->addresses as $address)
                            @foreach($address->deliveries as $delivery)
                                <tr class="bg-white text-gray-700 hover:bg-gray-50">
                                    <th scope="row" class="text-center pl-3  py-4 whitespace-nowrap">
                                        {{$key + 1}}
                                    </th>
                                    <td class="px-6 py-4 font-medium text-left">
                                        {{$delivery->client->name}}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-center">
                                        {{$address->title}}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-center">
                                        {{ucfirst($delivery->deliveryLine->item)}}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right">
                                        {{ucfirst($delivery->deliveryLine->qty)}}
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
