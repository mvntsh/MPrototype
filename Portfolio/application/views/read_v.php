    <div class="card" style="margin: 2em; zoom: 70%; background-color: #87ad7d;">
        <div class="card-body">
            <div class="row" style="margin-bottom: 2em;">
                <div class="col-md-6">
                    <h1 style="letter-spacing: 2px; font-size: 35pt; font-weight: bolder;"><?php echo $title; ?></h1>
                </div>
                <div class="col-md-3">
                    <select name="txtnmRequeststatus" class="form-control text-center" id="inputnmRequeststatus" style="height: 2.5em; font-size: 18pt; background-color: #dbf5d5;"></select>
                </div>
                <div class="col-md-3">
                    <input type="text" name="txtnmSearch" class="form-control" placeholder="Search..." style="height: 2.5em; font-size: 18pt; background-color: #dbf5d5;" id="inputnmSearch" autocomplete="off">
                </div>
            </div>
            <div class="card" style="overflow-y: scroll; height: 710px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0; background-color: #e0fcd9;">
                <div class="card-body">
                    <table id="tblRequest" class="table table-striped table-success" style="width:100%;">
                        <thead>
                            <tr style="height: 3.5em; vertical-align: middle; font-size: 18px; text-align: center;">
                                <th style="background-color: #37692b; color: #cce8c5;">Request ID</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Account Name</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Request Date</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Transaction Type</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Status</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Description</th>
                                <th style="background-color: #37692b; color: #cce8c5;">Amount</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewRequeststatus_v();
            viewData_v();
            function viewData_v(){
                $.ajax({
                    url: "Read/viewData_c",
                    type: "POST",
                    dataType: "json",
                    success: function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr style="height: 2.5em; vertical-align: middle; font-size: 16px;">
                                        <td style="text-align: center;">${x['request_id']}</td>
                                        <td style="font-weight: bolder;">${x['accountname']}</td>
                                        <td style="text-align: center;">${x['requestdate']}</td>
                                        <td>${x['transactiontype']}</td>
                                        <td style="text-align: center;">${x['requeststatus']}</td>
                                        <td>${x['description']}</td>
                                        <td style="text-align: right;">${x['amount']}</td>
                                `;
                            })
                            $('#tblRequest tbody').html(tbody);
                        } else {
                            alert("No data found.");
                        }
                    },
                    error: function(xhr, status, error){
                        console.error("Error fetching data: " + error);
                    }
                });
            }

            $("#inputnmRequeststatus").change(function(){
                viewperStatus_v();
            });

            function viewperStatus_v(){
                $.ajax({
                    url:"Read/viewperStatus_c",
                    type: "POST",
                    data:$("#inputnmRequeststatus").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr style="height: 2.5em; vertical-align: middle; font-size: 16px;">
                                        <td style="text-align: center;">${x['request_id']}</td>
                                        <td style="font-weight: bolder;">${x['accountname']}</td>
                                        <td style="text-align: center;">${x['requestdate']}</td>
                                        <td>${x['transactiontype']}</td>
                                        <td style="text-align: center;">${x['requeststatus']}</td>
                                        <td>${x['description']}</td>
                                        <td style="text-align: right;">${x['amount']}</td>
                                    </tr>
                                `;
                            })
                            $("#tblRequest tbody").html(tbody);
                        }
                    }
                })
            }

            $("#inputnmSearch").keyup(function(){
                searchSomething_v();
            });

            function searchSomething_v(){
                $.ajax({
                    url:"Read/searchSomething_c",
                    type:"POST",
                    data:$("#inputnmSearch").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr style="height: 2.5em; vertical-align: middle; font-size: 16px;">
                                        <td style="text-align: center;">${x['request_id']}</td>
                                        <td style="font-weight: bolder;">${x['accountname']}</td>
                                        <td style="text-align: center;">${x['requestdate']}</td>
                                        <td>${x['transactiontype']}</td>
                                        <td style="text-align: center;">${x['requeststatus']}</td>
                                        <td>${x['description']}</td>
                                        <td style="text-align: right;">${x['amount']}</td>
                                    </tr>
                                `;
                            })
                            $("#tblRequest tbody").html(tbody);
                        } else {
                            viewData_v();
                            alert(response.error);
                        }
                    }
                })
            }

            function viewRequeststatus_v(){
                $.ajax({
                    url:"Read/viewRequeststatus_c",
                    type:"POST",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var options = '<option value="">Select Request Status</option>';
                            response.data.forEach(function(x){
                                options += `<option value="${x['requeststatus']}">${x['requeststatus']}</option>`;
                            });
                            $("#inputnmRequeststatus").html(options);
                        } else {
                            alert("No request status found.");
                        }
                    }
                })
            }
        })
    </script>