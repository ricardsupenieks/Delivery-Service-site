@extends('layout')

@section('content')
    <div class="text-center text-3xl text-white mt-10 font-bold">
        Klientu saraksts
    </div>

    <div class="flex flex-row gap-12 bg-gray-900">
        <div class="w-full h-full h-screen ml-10 mt-10">

            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full text-sm">
                    <thead class="text-xs uppercase bg-gray-50 bg-white">
                    <tr>
                        <th scope="col" class="pl-3 py-3 text-center">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Klienti
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $key => $client)
                        <tr class="bg-white text-gray-700 hover:bg-gray-50">
                            <th scope="row" class="text-center pl-3  py-4 whitespace-nowrap">
                                {{$key + 1}}
                            </th>
                            <td class="px-6 py-4 font-medium text-left">
                                {{$client->name}}
                            </td>
                            <td class="px-6 py-4 font-medium text-right text-xs">
                                <button
                                    id="addresses"
                                    onclick="showAddresses()"
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

        <div class="bg-indigo-600 w-full h-screen mr-10 mt-10">
            <div class="container pt-4">
                <table class="table table-bordered data-table">
                    <thead class="text-center pt-4">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            var table = $('.data-table').DataTable({
            stateSave: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('datatable') }}",
            columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
            ]
        });

            $(".reload" ).click(function() {
            table.ajax.reload(null, false);
        });
        });
    </script>
@endsection
