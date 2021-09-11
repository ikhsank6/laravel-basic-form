 
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
</head>

<body>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h4>Bootstrap Snipp for Datatable</h4>
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>

                        </thead>
                        <tbody>
                        </tbody>

                    </table>


                </div>

            </div>
        </div>
    </div>
</body>

</html>


<script>
    $(document).ready(function () {
        $('#mytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{url("pegawai/getdata")}}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'alamat',
                    name: 'alamat'
                }
            ]
        });
    });

</script>