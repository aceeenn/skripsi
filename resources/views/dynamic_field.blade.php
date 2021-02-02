<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/alibs/
    jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/
    bootstrap/3.3.6/js/bootsrap.min.js"></script>

</head>

<body>
    <div class="container">
        <br>
        <h3 align="center">Dynamic</h3>
        <br>

        <div class="table-responsive">
            <form method="POST" id="dynaminc_form">
                <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Berat Barang</th>
                            {{-- <th>Panjang Barang</th>
                            <th>Lebar Barang</th>
                            <th>Tinggi Barang</th>
                            <th>Jumlah Barang</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="2" align="right">&nbsp;</td>
                            <td>
                                @csrf 
                                <input type="submit" name="save"
                                id="save" class="btn btn-primary" value="save">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div>
    
</body>
</html>

<script>
    $(document).ready(function(){

        var count = 1;

        dynamic_field (count);

        function dynamic_field(number){
            var html = '<tr>';
            html += '<td><input type="text" name="nama_barang[]"
            class="form-control"/></td>';

            html += '<td><input type="text" name="berat_barang[]"
            class="form-control"/></td>';

            html += '<td><input type="text" name="panjang_barang[]"
            class="form-control"/></td>';

            html += '<td><input type="text" name="lebar_barang[]"
            class="form-control"/></td>';

            html += '<td><input type="text" name="tinggi_barang[]"
            class="form-control"/></td>';

            html += '<td><input type="text" name="jumlah_barang[]"
            class="form-control"/></td>';

            if(number > 1){
                html += '<td><button type="button" name="remove" id="remove" 
                class="btn btn-danger">Remove</button></td></tr>';

                $('tbody').append(html);
            }
            else
            {
                html += '<td><button type="button" name="add" id="add"
                class="btn btn-success">Add</button></td></td></tr>';
                $('tbody').html(html);

            }
        }

        $('#add').click(function){
            count++;
            dynamic_field(count);
        });

        $(document).on('click', '#remove', function(){
            count--;
            dynamic_field(count);
        });

        $('#dynamic_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route ("dynamic-field.insert")}}',
                method:'post';
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#save').attr('disabled', 'disabled');
                },

                if(data.error){
                    var error_html ='';
                    for (var count = 0; count < data.error.length; count++);
                    {
                        error_html += '<p>' + data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">
                    '+ error_html+'</div>')
                }else{

                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'
                    +data.success+'</div>')
                }
                $('#save').attr('disabled', false);
            })

        });
    });
</script>