
    <script type="text/javascript">
        $(document).ready(function(){
            viewChart_c();
            function viewChart_c(){
                $.ajax({
                    url:"Chart/viewChart_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            response.data.forEach(function(sql){
                                var chart = new CanvasJS.Chart("chartContainer", {
                                    theme: "light1",
                                    animationEnabled: true,
                                    // exportEnabled: true,
                                    title:{
                                        text: ""
                                    },
                                    data: [{
                                        type: "pie",
                                        indexLabel: "{symbol} • {y} for {label}",
                                        yValueFormatString: "#,###,###,###.##",
                                        showInLegend: true,
                                        legendText: "{label} : {y}",
                                        dataPoints: [
                                            { y: sql["requestCount"],label: "Request" },
                                            { y: sql["receivedCount"],label: "Received" },
                                        ]
                                    }]
                                });
                                chart.render();
                            })
                        }
                    }
                })
            }
        })
    </script>
    <div class="card" style="margin-top: 2em; border-radius: 0px;">
        <div class="card-body">
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="margin-top: 7em; border-color: transparent; zoom: 80%;">
                        <form id="frmInputs">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="date" name="txtnmFrom" class="form-control form-control-lg" id="inputnmFrom">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="txtnmTo" class="form-control form-control-lg" id="inputnmTo">
                                </div>
                            </div>
                        </form>
                        <button class="btn btn-success btn-lg" style="margin-top: 1em;" id="btnGenerate">Generate Chart</button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card" style="margin-right: 1em; border-color: transparent;">
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btnGenerate").click(function(e){
                e.preventDefault();
                generateChart_v();
            })
            function generateChart_v(){
                $.ajax({
                    url:"Chart/generateChart_c",
                    type:"POST",
                    data:$("#frmInputs").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            response.data.forEach(function(sql){
                                var chart = new CanvasJS.Chart("chartContainer", {
                                    theme: "light1",
                                    animationEnabled: true,
                                    // exportEnabled: true,
                                    title:{
                                        text: ""
                                    },
                                    data: [{
                                        type: "pie",
                                        indexLabel: "{symbol} • {y} for {label}",
                                        yValueFormatString: "#,###,###,###.##",
                                        showInLegend: true,
                                        legendText: "{label} : {y}",
                                        dataPoints: [
                                            { y: sql["requestCount"],label: "Request" },
                                            { y: sql["receivedCount"],label: "Received" },
                                        ]
                                    }]
                                });
                                chart.render();
                            })
                        }else{
                            alert("No Records found.");
                        }
                    }
                })
            }
        })
    </script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>