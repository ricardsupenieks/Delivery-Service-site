@extends('layout')

@section('content')
    <div class="flex flex-col gap-12 bg-gray-900 mx-20 mt-10">
        <div class="text-white w-full flex flex-col gap-4 text-lg font-bold text-center">
            <div class="mx-4 text-3xl">
                {{$client->name}}
            </div>
            <div class="flex flex-row gap-2 mx-auto font-medium">
                <div>
                    {{$client->email}},
                </div>
                <div>
                    {{$client->phone}}
                </div>
            </div>
        </div>

        @if(!$clientDeliveries->isEmpty())
            <div class="bg-green-600 w-full flex flex-col">

                <div class="relative overflow-x-auto shadow-md">
                    <table class="w-full text-sm">
                        <thead class="text-xs uppercase bg-gray-50 bg-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left">
                                Adrese
                            </th>
                            <th scope="col" class="px-6 py-3 text-left">
                                Datums
                            </th>
                            <th scope="col" class="px-6 py-3 text-left">
                                Preču daudzums
                            </th>
                            <th scope="col" class="px-6 py-3 text-left">
                                Piegādes status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientDeliveries as $clientDelivery)
                            @foreach($clientDelivery->addresses as $address)
                                @foreach($address->deliveries as $delivery)
                                    <tr class="bg-white text-gray-700 hover:bg-gray-50">
                                        <td class="px-6 py-4 font-medium text-left">
                                           {{$address->title}}
                                         </td>
                                        <td class="px-6 py-4 font-medium text-left">
                                            {{$delivery->route->date}}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-left">
                                            {{$delivery->deliveryLine->qty}}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-left">
                                            {{$delivery->status}}
                                        </td>
                                    @endforeach
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    @endif
@endsection
