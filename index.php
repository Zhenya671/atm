<?
$nominal = require_once('nominal.php');
$nominal_str = implode(',',$nominal);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>title</title>
    <link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="media/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
    <div class="row">
            <div class="col align-self-center">
                <form id="nomForm" >
                    <div class="form-group">
                        <label for="nominal">Номинал в наличии</label>
                        <input type="text" class="form-control" id="nominal" value="<?= $nominal_str ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="summa">Ваша сумма</label>
                        <input type="number" class="form-control" id="summa">
                    </div>
                    <button type="button" id="send" class="btn btn-primary">Отправить</button>
                </form>
            </div>
       </div>
       <br /><br />
       <div class="alert alert-primary" role="alert" id="root"></div>
    </div>

    <script src="media/jquery.min.js"></script>
    <script>

        // $(document).ready(function() {
        //     $('#nomForm').submit(function(e) {
        //         e.preventDefault();
        //         $.ajax({
        //             'type': $(this).attr('method'),
        //             'data': 'summa=' + $('#summa').val(),
        //             'url': $(this).attr('action'),
        //             success: function(data) {
        //                 $('#root').empty();
        //                 $('#root').append(data);
        //             },
        //                 'error': function(msg) {
        //                 console.log(msg);
        //             }
        //
        //             });
        //     });
        //
        // });

        $(function() {
            $('#send').on('click', function() {
                $.ajax({
                    'type': 'POST',
                    'data': 'summa=' + $('#summa').val(),
                    'url': '/amasty-test-support/3z/ajax.php',
                    'success': function(data) {
                        $('#root').empty();
                        $('#root').append(data);
                    },
                    'error': function() {
                        console.log('error');
                    }
                });
            });
        });



        // $(function() {
        //     $('#send').on('click', function() {
        //         // var serializeFormData = $('#summa').serialize();
        //         $.ajax({
        //             'type': $(this).attr('method'),
        //             'data': $(this).serializeArray(),
        //             'url': $(this).attr('action'),
        //             'success': function (data) {
        //                 // console.log('successful')
        //                 // var jsonData = JSON.parse(data);
        //                 // if (jsonData.success === "1") {
        //                 //     location.href = 'ajax.php';
        //                 // }
        //                 // else {
        //                 //     alert('error');
        //             }
        //             $('#root').empty();
        //         $('#root').append(data);
        //         // console.log(data)
        //     }
        //
        //             'error': function() {
        //                 console.log('error');
        //             }
        //     }
        //
        //
        // });
    </script>
</body>

</html>