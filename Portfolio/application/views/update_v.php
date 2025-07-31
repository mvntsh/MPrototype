    <div class="card" style="margin: 2em; background-color: #e0fcd9;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="border-radius:0px; margin-bottom: .5em;">
                        <div class="card-body" id="divStatus"></div>
                    </div>
                    <div class="card" style="border-radius:0px; overflow-y: scroll; height: 370px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0;">
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
                    <div class="card" style="overflow-y: scroll; height: 540px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0; border-radius:0px;">
                        <div class="card-body">
                            <input type="text" name="txtnmRequestno" id="inputnmRequestno" hidden>
                            <table class="table table-hover table-striped table-bordered" id="tblUpdate">
                                <thead>
                                    <tr style="vertical-align: middle;">
                                        <th colspan="3" style="font-size: 25pt;">Update Request</th>
                                        <th colspan="3">
                                            <input type="text" name="txtnmSearchTerm" class="form-control form-control-lg" placeholder="Search Term" id="inputnmSearchTerm">
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
            requestStatus_v();
            function viewData_v(){
                $.ajax({
                    url:"Update/viewData_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td style="text-align:center;"><i class="fa-solid fa-circle fa-fade" style="color: ${x.requestColor}; font-size: 9pt;"></i> ${x['request_id']}</td>
                                        <td>${x['accountname']}</td>
                                        <td>${x['description']}</td>
                                        <td>${x['amount']}</td>
                                        <td style="text-align: center;">
                                            <button data-requestno="${x.request_no}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}>Process</button>
                                            <button data-requestno="${x.request_no}" class="btn btn-danger btn-sm" id="btnReject" ${x.activeButton}>Reject</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblUpdate tbody").html(tbody);
                        }else{
                            $("#tblUpdate tbody").html('<tr><td colspan="5" style="text-align:center;">No records found.</td></tr>');
                        }
                    }
                })
            }

            $("#inputnmSearchTerm").on("keyup", function(e){
                e.preventDefault();
                searchRequest_v();
            });

            function searchRequest_v(){
                $.ajax({
                    url:"Update/searchRequest_c",
                    type:"POST",
                    data:$("#inputnmSearchTerm").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td style="text-align:center;"><i class="fa-solid fa-circle fa-fade" style="color: ${x.requestColor}; font-size: 9pt;"></i> ${x['request_id']}</td>
                                        <td>${x['accountname']}</td>
                                        <td>${x['description']}</td>
                                        <td>${x['amount']}</td>
                                        <td style="text-align: center;">
                                            <button data-requestno="${x.request_no}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}>Process</button>
                                            <button data-requestno="${x.request_no}" class="btn btn-danger btn-sm" id="btnReject" ${x.activeButton}>Reject</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblUpdate tbody").html(tbody);
                        }else{
                            $("#tblUpdate tbody").html('<tr><td colspan="5" style="text-align:center;">No records found.</td></tr>');
                        }
                    }
                })
            }

            $("#tblUpdate").on("click", "#btnProcess,#btnReject", function(){
                $("#inputnmRequestno").val($(this).data("requestno"));
            });

            function requestStatus_v(){
                $.ajax({
                    url:"Update/requestStatus_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var div = '';

                            response.data.forEach(function(x){
                                div +=`
                                    <div class="card" style="zoom: 80%; margin-bottom: .5em; border-color: ${x.requestColor};" id="btn${x.requeststatus}">
                                        <div class="card-body">
                                            <span class="badge" style="background-color: ${x.requestColor}; font-size: 18pt;">${x.countEntries}</span>
                                            <span style="font-size: 18pt; text-transform: uppercase; color: ${x.requestColor}">${x.requeststatus}</span>
                                        </div>
                                    </div>
                                `;
                            })
                            $("#divStatus").html(div);
                        }
                    }
                })
            }

            $(document).on("click","#btnReceived",function(e){
                e.preventDefault();
                $.ajax({
                    url:"Update/viewReceived_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td style="text-align:center;"><i class="fa-solid fa-circle fa-fade" style="color: ${x.requestColor}; font-size: 9pt;"></i> ${x['request_id']}</td>
                                        <td>${x['accountname']}</td>
                                        <td>${x['description']}</td>
                                        <td>${x['amount']}</td>
                                        <td style="text-align: center;">
                                            <button data-requestno="${x.request_no}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}>Process</button>
                                            <button data-requestno="${x.request_no}" class="btn btn-danger btn-sm" id="btnReject" ${x.activeButton}>Reject</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblUpdate tbody").html(tbody);
                            $("#btnReceived").css("background-color", "#b8d9b0");
                            $("#btnReceived").css("border-color", "transparent");
                            $("#btnRequest").css("background-color", "white");
                            $("#btnReceived").css("border-color", "#b8d9b0");
                        }
                    }
                })
            })

            $(document).on("click","#btnRequest",function(e){
                e.preventDefault();
                $.ajax({
                    url:"Update/viewRequest_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td style="text-align:center;"><i class="fa-solid fa-circle fa-fade" style="color: ${x.requestColor}; font-size: 9pt;"></i> ${x['request_id']}</td>
                                        <td>${x['accountname']}</td>
                                        <td>${x['description']}</td>
                                        <td>${x['amount']}</td>
                                        <td style="text-align: center;">
                                            <button data-requestno="${x.request_no}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}>Process</button>
                                            <button data-requestno="${x.request_no}" class="btn btn-danger btn-sm" id="btnReject" ${x.activeButton}>Reject</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblUpdate tbody").html(tbody);
                            $("#btnRequest").css("background-color", "#fce8b6");
                            $("#btnRequest").css("border-color", "transparent");
                            $("#btnReceived").css("background-color", "white");
                            $("#btnRequest").css("border-color", "#fce8b6");
                        }
                    }
                })
            })
        });
    </script>