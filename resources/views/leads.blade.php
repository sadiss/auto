<x-app-layout>
    <link rel="stylesheet" href="{{asset('assets/date.css')}}">

    <style>
        .buttons-csv {
            background: green;
            padding: 10px;
            color: #fff;
            border-radius: 3px;
        }
        .dt-buttons{
            text-align: center;
        }
        .reset_filter{
            right:0;
            top:37px;
            display: inline-block;
            position: absolute;
            width: 101px;
            padding: 6.5px;
            background: red;
            color: white;
            text-decoration: none;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="container" style="max-width: 1400px; margin:0 auto;">

        <div class="row">
           <div class="col-md-8 offset-md-2 row mt-8">
               <div class="col-md-4">
                   <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                       <div class="card-header">Page views</div>
                       <div class="card-body">
                           <h5 class="card-title">Page views</h5>
                           <p class="card-text">
                               {{count($views)}}
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                       <div class="card-header">Form submission</div>
                       <div class="card-body">
                           <h5 class="card-title">Totoal submissions</h5>
                           <p class="card-text">
                              {{count($leads)}}
                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                       <div class="card-header">Funnel Status</div>
                       <div class="card-body">
                           <h5 class="card-title">Current Status</h5>
                           <p class="card-text">
                               All services up and running
                           </p>
                       </div>
                   </div>
               </div>
           </div>
            <div class="row">
                <div class="col-md-4 offset-md-4 demo">
                    <h4>Select the date to filter records</h4>
                    <input type="text" id="config-demo" class="form-control placeholded" value="{{$startDate}} - {{$endDate}}">
                    <a class="reset_filter" href="{{route('form_submission')}}">Reset filter</a>
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="col-sm-12 col-md-12" style="margin-top:30px;">
                    <table id="myTable" class="table">
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
                                <td style="word-break: break-all"><a href="{{$leads->xxTrustedFormCertUrl}}"
                                                                     target="_blank">{{$leads->xxTrustedFormCertUrl}}</a>
                                </td>
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
<script type="text/javascript" src="{{asset('assets/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/daterangepicker.js')}}"></script>

<script>

    $(document).ready(function () {

// Custom filtering function which will search data in column four between two values
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
    });
    $(document).ready(function() {
        $('.demo i').click(function() {
            $(this).parent().find('input').click();
        });
        updateConfig();

        function updateConfig() {
            var options = {};
            options.opens = "center";
            options.ranges = {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            };
            $('#config-demo').daterangepicker(options, function(start, end, label) {
                var startDate = start.format('YYYY-MM-DD'); var endDate = end.format('YYYY-MM-DD');
                passDate(startDate,endDate);
            });

        }

    });

    function passDate(startDate,endDate) {
        $('.loader').show();
        window.location = "{{route('form_submission')}}?startDate="+startDate+"&endDate="+endDate;
        // $.ajax({
        //     type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
        //     url: 'date-filteration.php', // the url where we want to POST
        //     data: 'startDate='+startDate+'&endDate='+endDate, // our data object
        // })
        // // using the done promise callback
        //     .done(function(data) {
        //         $('.loader').hide();
        //         // log data to the console so we can see
        //         $('.response').html(data);
        //         // here we will handle errors and validation messages
        //     });
    }
</script>
