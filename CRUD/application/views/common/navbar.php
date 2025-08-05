    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:400,300,700);

        @media screen{
            .container > section {
                margin: 0 auto;
                padding: 3em 1em;
                text-align: center;
            }

            nav a {
                position: relative;
                display: inline-block;
                margin: 15px 15px;
                outline: none;
                color: #fff;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 100;
                text-shadow: 0 0 1px rgba(255,255,255,0.3);
                font-size: 1em;
            }

            .color-3 {	background: #0D6FA8;}

            nav a:hover,
            nav a:focus {
                outline: none;
            }
            .cl-effect-15 a {
                color: rgba(0,0,0,0.2);
                font-weight: 700;
                text-shadow: none;
            }

            .cl-effect-15 a::before {
                color: #fff;
                content: attr(data-hover);
                position: absolute;
                -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
                -moz-transition: -moz-transform 0.3s, opacity 0.3s;
                transition: transform 0.3s, opacity 0.3s;
            }

            .cl-effect-15 a:hover::before,
            .cl-effect-15 a:focus::before {
                -webkit-transform: scale(0.9);
                -moz-transform: scale(0.9);
                transform: scale(0.9);
                opacity: 0;
            }
        }
    </style>
    <div class="container" style="width: 100%; zoom: 80%;">
        <section class="color-3">
            <nav class="cl-effect-15">
                <a href="Create" data-hover="Create">Create</a>
                <a href="Read" data-hover="Read">Read</a>
                <a href="Update" data-hover="Update" class="position-relative">Update <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="requestBadge"><span class="visually-hidden">unread messages</span></span></a>
                <a href="Delete" data-hover="Delete">Delete</a>
                <a href="Chart" data-hover="Chart">Chart</a>
            </nav>
        </section>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            countRequest_v();
            function countRequest_v(){
                $.ajax({
                    url:"Update/countRequest_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var count = response.data[0].countRequest;
                            $("#requestBadge").text(count > 99 ? "99+" : count); // Display 99+ if count exceeds 99
                        } else {
                            $("#requestBadge").text("0"); // Default to 0 if no data found
                        }
                    }
                })
            }
        });
    </script>