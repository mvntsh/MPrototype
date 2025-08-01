<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mozilla+Headline:wght@200..700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/639350242b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
</head>
<body>
    <style type="text/css">
        @media screen{

            :root{
            --color: #333; 
            }

            body {
                font-family: "Mozilla Headline", sans-serif;
                font-optical-sizing: auto;
                font-style: normal;
                font-variation-settings:
                    "wdth" 100;
            }

            .container {
            text-align: center;
            color: #856808;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url(../img/picture-singapore-village-hotel-sentosa-28.jpg);
            background-size: cover;
            background-position: center;
            
            /*  this is where the magic happens:  */
            background-attachment: fixed;
            }

            h1 {
            font-weight: 700;
            font-size: 3rem;
            }

            p {
            max-width: 52ch;
            line-height: 1.5;
            padding: 1em;
            }

            .blank,
            .other {
            width: 100%;
            min-height: 60vh;
            background-color: var(--color);
            }

            .second {
            background-image:url(../img/img-village-hotel-sentosa-singapore-21.jpg);
            background-attachment: fixed;
            height: 1200px;
            }

            h3 {
            font-weight: 700;
            font-size: 1.6rem;
            margin-top: 1em;
            }

            .card > a {
            margin-bottom: 2em;
            }

            .item {
            display: flex;
            max-width: 320px;
            background-color: white;;
            flex-direction: column;
            align-items: center;
            border-radius: .5em;
            -webkit-box-shadow: 0px 29px 38px -15px rgba(0,0,0,0.43);
            -moz-box-shadow: 0px 29px 38px -15px rgba(0,0,0,0.43);
            box-shadow: 0px 29px 38px -15px rgba(0,0,0,0.43);
            }

            .img {
            width: 100%;
            height: 200px;
            background-color: lightgrey;
            background-size: cover;
            background-position: center;
            border-radius: 0em;
            }

            .img-first {
                background-image: url(../img/ed4471af.avif);
            }

            .img-second {
                background-image: url(../img/423010108.jpg);
            }

            .img-third {
                background-image: url(../img/banner-rooms.jpg);
            }

            .second {
            flex-direction: row;
            gap: 1.6em;
            }
        }
    </style>
    <div class="container">
        <div class="card" style="background-color: transparent; backdrop-filter: blur(2px); border-color: transparent; color: #290d02;">
            <h1>BELGIAN RESORT</h1>
            <p>Belgian Resort is here to satisfy your vacation, book a room now!</p>
        </div>
    </div>
    <div class="blank"></div>
    <div class="container second">
        <div class="item" style="height: 450px;">
            <div class="img img-first"></div>
            <div class="card" style="border-color: transparent;">
                <h3>Standard Room</h3>
                <p>Overlooking view, Queen size bed, Netflix, A/C and Kitchen plus free break fast for two.</p>
                <button class="btn btn-dark btn-lg" style="border-radius: 0px;" id="btnStandard">BOOK</button>
            </div>
        </div>
        <div class="item" style="height: 450px;">
            <div class="img img-second"></div>
            <div class="card" style="border-color: transparent;">
                <h3>Deluxe Room</h3>
                <p>Seaview, Netflix, 2 Queen size bed, A/C, Hot and cold shower and Kitchen plus free break fast for two.</p>
                <button class="btn btn-dark btn-lg" style="border-radius: 0px;" id="btnDeluxe">BOOK</button>
            </div>
        </div>
        <div class="item" style="height: 450px;">
            <div class="img img-third"></div>
            <div class="card" style="border-color: transparent;">
                <h3>VIP Room</h3>
                <p>Seaview, Netflix, A/C, Hot and cold shower, Double-King size bed and Kitchen plus free break fast for two.</p>
                <button class="btn btn-dark btn-lg" style="border-radius: 0px;" id="btnVip">BOOK</button>
            </div>
        </div>
    </div>
    <div class="blank"></div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" hidden>
    Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTitle">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="txtnmRoomtype" id="inputnmRoomtype" hidden>
                    <div class="card" id="roomImg"></div>
                    <span id="roomDes"></span>
                    <div class="card">
                        <p>Check-in: <input type="date" class="form-control" name="txtnmCheckin" id="inputnmCheckin"></p>
                        <p>Check-out: <input type="date" class="form-control" name="txtnmCheckout" id="inputnmCheckout"></p>
                        <p>Number of guests: <input type="number" class="form-control" name="txtnmGuests" id="inputnmGuests" min="1" max="10"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btnStandard').click(function() {
                $('#inputnmRoomtype').val("Standard Room");
                $('#staticBackdrop').modal('show');
                $("#modalTitle").text("Booking for Room");
                $("#roomImg").html('<img src="../img/ed4471af.avif" class="img-fluid" alt="Standard Room" style="width: 100%; height: 100%;">');
                $("#roomDes").html("<h3>Standard Room</h3><p>Details:</p><p>Overlooking view, Queen size bed, Netflix, A/C and Kitchen plus free break fast for two, worth 3,500.00</p>");
            });

            $('#btnDeluxe').click(function() {
                $('#inputnmRoomtype').val("Deluxe Room");
                $('#staticBackdrop').modal('show');
                $("#modalTitle").text("Booking for Room");
                $("#roomImg").html('<img src="../img/423010108.jpg" class="img-fluid" alt="Deluxe Room" style="width: 100%; height: 100%;">');
                $("#roomDes").html("<h3>Deluxe Room</h3><p>Details:</p><p>Seaview, Netflix, 2 Queen size bed, A/C, Hot and cold shower and Kitchen plus free break fast for two, worth 4,500.00</p>");
            });

            $('#btnVip').click(function() {
                $('#inputnmRoomtype').val("VIP Room");
                $('#staticBackdrop').modal('show');
                $("#modalTitle").text("Booking for Room");
                $("#roomImg").html('<img src="../img/banner-rooms.jpg" class="img-fluid" alt="Deluxe Room" style="width: 100%; height: 100%;">');
                $("#roomDes").html("<h3>VIP Room</h3><p>Details:</p><p>Seaview, Netflix, A/C, Hot and cold shower, Double-King size bed and Kitchen plus free break fast for two, worth 6,500.00</p>");
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>