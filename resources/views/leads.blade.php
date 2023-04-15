
<x-app-layout>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        .buttons-csv{
            background: green;
            padding: 10px;
            color: #fff;
            border-radius: 3px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="container" style="max-width: 1460px;">
        <div class="row">
            <div class="col-sm-12 col-md-12" style="margin-top:30px;">
                <table id="myTable" class="table" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Name</th>
                        <th>Phone</th>
                        <th>Zip</th>
                        <th>URL</th>
                        <th>IP</th>
                        <th>Consent</th>
                        <th>Trust Form URL</th>
                        <th>Universal lead id</th>
                        <th>Crated at</th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse($leads as $key => $leads)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$leads->firstName}}</td>
                            <td>{{$leads->lastName}}</td>
                            <td>{{$leads->email}}</td>
                            <td>{{$leads->phone}}</td>
                            <td>{{$leads->zip}}</td>
                            <td style="word-break: break-all">{{$leads->url}}</td>
                            <td>{{$leads->ipaddress}}</td>
                            <td>{{$leads->tcpaConsent}}</td>
                            <td style="word-break: break-all"><a href="{{$leads->xxTrustedFormCertUrl}}" target="_blank">{{$leads->xxTrustedFormCertUrl}}</a></td>
                            <td style="word-break: revert">{{$leads->universal_leadid}}</td>
                            <td>{{date('Y-m-d', strtotime($leads->created_at))}}</td>
                        </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.4.0/js/dataTables.dateTime.min.js    "></script>
<script>
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date( data[4] );

            if (
                ( min === null && max === null ) ||
                ( min === null && date <= max ) ||
                ( min <= date   && max === null ) ||
                ( min <= date   && date <= max )
            ) {
                return true;
            }
            return false;
        }
    );

    $(document).ready( function () {
        var minDate, maxDate;

// Custom filtering function which will search data in column four between two values
        minDate = new DateTime($('#min'), {
            format: 'YYYY MM Do'
        });
        maxDate = new DateTime($('#max'), {
            format: 'YYYY MM Do'
        });
        var table = $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'csv'
            ]
        });

        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });
    } );
</script>
