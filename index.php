<html>
<head>
    <title>JavaScript shopping basket Example</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fezvrasta.github.io/bootstrap-material-design/dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="http://fezvrasta.github.io/bootstrap-material-design/dist/css/ripples.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body>
<div class="navbar container-fluid" ng-controller="shell as vm">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="#" class="img-responsive" style="float: left; margin-right: 30px; padding-top: 7px;" alt="Logo" />
            <a class="navbar-brand" ui-sref="overview">luca-marti.ch</a>
        </div>
        <div class="navbar-collapse collapse navbar-warning-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">XYZ</a>
                </li>
                <li>
                    <a href="#">ABC</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <span id="chart" class="label label-danger">(0)</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-3">
        <div class="panel panel-default product">
            <div class="panel-heading">
                <span class="productName">Surface Pro 4</span><input type="text" name="id" value="1" hidden="hidden" />
                <span class="pull-right">
                    <a href="#">In den Warenkorb</a>
                </span>
            </div>
            <div class="panel-body">
                <img src="http://compass-ssl.surface.com/assets/2e/6b/2e6b539f-cfb9-4187-bb6f-678e35343cce.png?n=Alcantara_1920_RL_panel8.png" width="100%" alt="surface" />
                <span class="price pull-right">
                    CHF 1500.00
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default product">
            <div class="panel-heading">
               <span class="productName">Chromebook</span><input type="text" name="id" value="2" hidden="hidden" />
                <span class="pull-right">
                    <a href="#">In den Warenkorb</a>
                </span>
            </div>
            <div class="panel-body">
                <img src="http://4.bp.blogspot.com/-uO5lySoXa_c/Vz1iGHOqrCI/AAAAAAAADG0/P2FAZTmgLm00Jb5XQNGMH0jZidSUzGXCQCLcB/s1600/B113_Pixel2_Silver_AppLauncher.png" width="100%" alt="chromebook" />
                <span class="price pull-right">
                    CHF 1600.00
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default product">
            <div class="panel-heading">
                <span class="productName">Surfacebook</span><input type="text" name="id" value="3" hidden="hidden" />
                <span class="pull-right">
                    <a href="#">In den Warenkorb</a>
                </span>
            </div>
            <div class="panel-body">
                <img src="http://ncmedia.azureedge.net/ncmedia/2016/02/2016_2_Surface_Book_Verfuegbarkeit.png" width="100%" alt="Surfacebook" />
                <span class="price pull-right">
                    CHF 1700.00
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default product">
            <div class="panel-heading">
                <span class="productName">Mac Book</span><input type="text" name="id" value="4" hidden="hidden" />
                <span class="pull-right">
                    <a href="#">In den Warenkorb</a>
                </span>
            </div>
            <div class="panel-body">
                <img src="http://orig02.deviantart.net/dc78/f/2013/312/9/7/os_x_mavericks__macbook_png__by_sucxces-d6t59mq.png" width="100%" alt="Macbook" />
                <span class="price pull-right">
                    CHF 1800.00
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="index.php">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Warenkorb</h4>
                </div>
                <div class="modal-body" id="chartContent">

                </div>
                <div class="modal-footer">
                    <input type="number" hidden="hidden" readonly name="warenkorb" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Absenden">
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://fezvrasta.github.io/bootstrap-material-design/dist/js/ripples.min.js"></script>
<script type="text/javascript" src="http://fezvrasta.github.io/bootstrap-material-design/dist/js/material.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    // set counter for the shopping basket to 0
    var countClick = 0;
    // click function on div with class product
    $(".product")
        .click(function(e) {
            // set counter +1 for the shopping basket span
            countClick = countClick + 1;
            // set the text of the shopping basket span
            document.getElementById("chart").innerHTML = "(" + countClick + ")";
            // set the content of the modal, which pop up when user click on the shopping basket icon
            document.getElementById("chartContent").innerHTML += "<div class='row'><div class='col-md-10'><img src=" + $(this).find("img").attr("src") + "alt='product' width='100'/>" + $(this).find(".panel-heading").find(".productName").prop("innerHTML") + "<br/></div><div class='col-md-2'>" + 
            $(this).find(".panel-body").find(".price").prop("innerHTML") + "</div><input name='productOrder' value=" + $(this).find(".panel-heading").find("input").attr("value") + " hidden='hidden'/></div>";        
            console.log("Element added");
        });

</script>
    <?php
if(isset($_POST["warenkorb"])){
    if(isset($_POST['productOrder'])) {
        ?><script type="text/javascript">swal('Deine Bestellung wurde erfolgreich versendet!', 'Oder auch doch nicht ¯\_(ツ)_/¯', 'success')</script><?php 
    }
}
?>
</body>
</html>
