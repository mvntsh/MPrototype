    <div class="card" style="margin: 2em;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="border-radius:0px; margin-bottom: .5em;">
                        <div class="card-body">
                            <div class="card" style="zoom: 80%; margin-bottom: .5em;">
                                <div class="card-body">
                                    <span class="badge" style="background-color: green; font-size: 18pt;">123</span>
                                    <span style="font-size: 18pt; text-transform: uppercase;">Requests</span>
                                </div>
                            </div>
                            <div class="card" style="zoom: 80%;">
                                <div class="card-body">
                                    <span class="badge" style="background-color: green; font-size: 18pt;">123</span>
                                    <span style="font-size: 18pt; text-transform: uppercase;">Received</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="border-radius:0px; overflow-y: scroll; height: 370px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0; background-color: #e0fcd9;">
                        <div class="card-body">
                            <div class="card" style="zoom: 80%; margin-bottom: .5em;">
                                <div class="card-body">
                                    <span class="badge" style="background-color: green; font-size: 18pt;">123</span>
                                    <span style="font-size: 18pt; text-transform: uppercase;">Cash Advance</span>
                                </div>
                            </div>
                            <div class="card" style="zoom: 80%;">
                                <div class="card-body">
                                    <span class="badge" style="background-color: green; font-size: 18pt;">123</span>
                                    <span style="font-size: 18pt; text-transform: uppercase;">Funding</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card" style="overflow-y: scroll; height: 540px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0; background-color: #e0fcd9;">
                        <div class="card-body">
                            <input type="text" name="txtnmRequestno" id="inputnmRequestno" hidden>
                            <table class="table table-hover table-striped table-bordered" id="tblUpdate">
                                <thead>
                                    <tr style="vertical-align: middle;">
                                        <th colspan="3" style="font-size: 25pt;">Update Request</th>
                                        <th colspan="3">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search Request" id="inputnmSearchRequest">
                                        </th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th style="width: 13%;">Request ID</th>
                                        <th style="width: 20%;">Account Name</th>
                                        <th style="width: 30%;">Description</th>
                                        <th style="width: 15%;">Amount</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="zoom: 85%;"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewData_v();
            function viewData_v(){
                $.ajax({
                    url:"Update/viewData_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            let tableBody = $("#tblUpdate tbody");
                            response.data.forEach(function(x){
                                let row = `<tr style="vertical-align: middle;">
                                    <td style="text-align:center;">${x.request_id}</td>
                                    <td>${x.accountname}</td>
                                    <td>${x.description}</td>
                                    <td>${x.amount}</td>
                                    <td style="text-align: center;">
                                        <button data-requestno="${x.request_no}" class="btn btn-success btn-sm" id="btnProcess">Process</button>
                                        <button data-requestno="${x.request_no}" class="btn btn-danger btn-sm" id="btnReject">Reject</button>
                                    </td>
                                </tr>`;
                                tableBody.append(row);
                            });
                        }
                    }
                })
            }

            $("#tblUpdate").on("click", "#btnProcess,#btnReject", function(){
                $("#inputnmRequestno").val($(this).data("requestno"));
            });
        });
    </script>