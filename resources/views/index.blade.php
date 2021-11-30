<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-dark bg-dark">

    <span class="navbar-brand mb-0 h1">ICECREAM SHOP</span>
</nav>

<div class="row">

    <div class="col-sm-3">

        <div class="container">
            <div class="list-group-item list-group-item-action active">Item</div>


        <div class="panel-body bg-dark" style="color: white">
            
            <form id="frm-project">
                <div class="form-group">

                    <div>     
                        <img src="{{asset('/images/chocolate.jpg')}}"  id="Chocolate" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                            <b>Chocolate</b>
                            <b style="color:red">Price:150tk</b>
                    </div>
                     

                    <div>
                    <img src="{{asset('/images/mango.jpg')}}" id="Mango" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Mango</b>
                        <b style="color:red">Price:200tk</b>
                    </div>

                    <div>
                    <img src="{{asset('/images/vanilla.jpg')}}" id="vanilla" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Vanilla</b>
                        <b style="color:red">Price:120tk</b>
                    </div>

                    <div>
                    <img src="{{asset('/images/strawberry.jpg')}}" id="Strawberry" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Strawberry</b>
                        <b style="color:red">Price:150tk</b>
                    </div>

                    <div>
                    <img src="{{asset('/images/m.jpg')}}" id="MixFruits" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>MixFruits</b>
                        <b style="color:red">Price:250tk</b>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="container">
            <div class="list-group-item list-group-item-action active">AddProducts</div>
            <table id="tbl-item" class="table table-dark table-bordered" cellpadding="0" cellspacing="0" width="100%" align="center">
                <thead>

                <tr>
                    <th>Delete</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>

                <tbody>

                </tbody>

            </table>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="list-group-item list-group-item-action active">Bill</div>
        <div>
            <label>Total</label>
            <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total" placeholder="Total" required>
        </div>
        </br>

        <div>
            <input type="button" class="btn btn-warning" value="reset" name="reset" id="reset">
        </div>

    </div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Qty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <input type="number" style="color: yellow; background: black; font-size: 30px;" id="qty" name="qty" placeholder="Qty" required>
                </div>
            </div>




            <div class="modal-footer">
                <input type="button" class="btn btn-info" value="Add" name="add" id="add" onclick="add()">


            </div>
        </div>
    </div>
</div>

<script src="{{asset('/component/jquery/jquery.js')}}"></script>

<script src="{{asset('/component/jquery/jquery.min.js')}}"></script>

<script type="text/javascript">

    var total = 0;
    var tot = 0;

    var item = null;
    var price = 0;


    var a = "";

    $("img").on("click",function()
        {

            a = $(this).prop('id')

        });


    function add()
    {
        if(a == "Chocolate")
        {

            item = "Chocolate";
            price = 150;


        }
        else if(a == "Mango")
        {
            item = "Mango";
            price = 200;

        }
        else if(a == "vanilla")
        {
            item = "vanilla";
            price = 120;

        }
        else if(a == "Strawberry")
        {
            item = "Strawberry";
            price = 150;

        }

        else if(a == "MixFruits")
        {
            item = "MixFruits";
            price = 250;

        }

        var qty = $('#qty').val();
        tot = qty * price;

        var table1 =

            "<tr>" +
            "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td>" +
            "<td>" + item    +  "</td>" +
            "<td>" + price    +  "</td>" +

            "<td>" + qty    +  "</td>" +

            "<td>" + tot    +  "</td>" +

            "</tr>" ;


        total += Number(tot);
        $('#total').val(total);


        $("table tbody").append(table1);
        $("exampleModal").modal('toggle');
        $('#qty').val("1");


    }

    function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();



    }

    $('#reset').click(function()
    {
        location.reload();
    });

</script>


</body>

</html>