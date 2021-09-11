
<html>

<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DataTables Tutorial</title>

       
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
       
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h4>Bootstrap Snipp for Datatable</h4>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Filter</div>
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="" class="col-sm-1">Join Date</label>
                                    <div class="col-sm-6">
                                        @php
                                                        
                                                        $tanggalStart = date('Y/m/d H:i:s',strtotime('2018-09-01 00:00:00'));
                                                        $tanggalEnd = date('Y/m/d H:i:s',strtotime('2020-09-01 00:00:00'));
                                                @endphp
                                        <input type="text" value="{{ $tanggalStart.' - '.$tanggalEnd }}" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-sm-2"><a id="filter" class="btn btn-success">Filter</a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Join Date</th>
                            <th>Salary</th>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" style="text-align:right">Total</th>
                                <th id="total">ss</th>
                            </tr>
                        </tfoot>
                    </table>


                </div>

            </div>
        </div>
    </div>
</body>

</html>


<script>
    $(document).ready(function () {
        var daterange = $('#tanggal').val();
        var dr = daterange.replace(/\//g, '-');
        var drnp = dr;
        var urlf = "{{route('employee.getdata',':param')}}"; 
        urlf = urlf.replace(':param', drnp);


        
        $('#tanggal').daterangepicker({
            "showDropdowns": true,
            "minYear": 2000,
            "maxYear": 2030,
            "timePicker": true,
            "timePicker24Hour": true,
            "timePickerSeconds": true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            "locale": {
                "format": "MM/DD/YYYY",
                "separator": " - ",
                "applyLabel": "Apply",
                "cancelLabel": "Cancel",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "Su",
                    "Mo",
                    "Tu",
                    "We",
                    "Th",
                    "Fr",
                    "Sa"
                ],
                "monthNames": [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ],
                "firstDay": 1
            },
            "linkedCalendars": false,
            "autoUpdateInput": false,
            "startDate": "11/24/2018",
            "endDate": "01/01/2018",
            "cancelClass": "btn-danger"
        }, function(start, end, label) {
            $('#dateFilter-a').val(start.format('YYYY/MM/DD HH:mm:ss') + ' - ' + end.format(
                'YYYY/MM/DD HH:mm:ss'));
        });
        
        $('#mytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: urlf,
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'position',
                    name: 'position'
                },
                {
                    data: 'join_date',
                    name: 'join_date'
                },
                {
                    data: 'salary',
                    name: 'salary'
                }
            ],
            "footerCallback": function ( row, data, start, end, display ) {
                var api = this.api(), data;
    
                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };
    
                // Total over all pages
                total = api
                    .column( 4 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
    
                // Total over this page
                pageTotal = api
                    .column( 4, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
    
                // Update footer
                $( api.column( 4 ).footer() ).html(
                    ''+pageTotal +' ( '+ total +' )'
                );
            }
        
        });

        $("#filter").click(function() {
             daterange = $('#tanggal').val();
            dr = daterange.replace(/\//g, '-');
            drnp = dr;
            urlf = "{{route('employee.getdata',':param')}}"; 
            urlf = urlf.replace(':param', drnp);
            $('#mytable').DataTable().ajax.url(urlf).load();
        });
    });

</script>
