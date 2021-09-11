
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

    </style>

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Laravel</title>
</head>

<body>

    

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Elemen Dinamis</div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address0" name="email[]" class="form-control" name="email-address">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" onclick="addrow()" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                                <input type="hidden" id="numbRows" value="0">
                                <div id="row_dinamis"></div>
                        </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>







</body>

</html>
<script>
    function addrow()
    {
        var no = parseInt($('#numbRows').val());
        var html='';
        
        $('#numbRows').val(no+1);
        
        html +='<div class="form-group row" id="rowContent'+ $('#numbRows').val()+'">';
            html +=' <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address '+$('#numbRows').val()+'</label>';
            html +='<div class="col-md-6">';
                html +='<input type="text" id="email_address0" name="email[]" class="form-control" name="email-address">';
            html +='</div>';
            html +='<div class="col-md-1"> <button type="button" onclick="removeRow('+$('#numbRows').val()+')" class="btn btn-danger">Hapus</button></div>';
        html +='</div>';

        $('#row_dinamis').append(html);
    }

    function removeRow(no)
    {
        var cek = parseInt($('#numbRows').val());
        if (cek != 0) {
            $('#numbRows').val(cek - 1);
        }
        $('#rowContent' + no).remove();
    }
</script>
