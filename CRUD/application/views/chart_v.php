
    <script type="text/javascript">
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
    </script>
    <div class="card" style="margin-top: 2em;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="margin-top: 7em; border-color: transparent;">
                        <div class="row" style="zoom: 80%;">
                            <div class="col-md-6">
                                <input type="date" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control form-control-lg">
                            </div>
                            <button class="btn btn-success btn-lg" style="margin-top: 1em;">Generate Chart</button>
                        </div>
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
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>