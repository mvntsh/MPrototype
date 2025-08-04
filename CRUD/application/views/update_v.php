    <div class="card" style="margin: 2em; background-color: #e0fcd9;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="background-color: #4aabbd; border-color: #4aabbd; border-radius:0px; margin-bottom: .5em;">
                        <div class="card-body" id="divStatus"></div>
                    </div>
                    <div class="card" style="background-color: #bac46a; border-color: #bac46a; border-radius:0px; overflow-y: scroll; height: 370px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0;">
                        <div class="card-header" style="top:0; position: sticky; background-color: #bac46a; color: black; font-size: 20pt; text-align: center; font-weight: bold;">
                            <h3 style="font-size: 20pt;">Edit Area</h3>
                        </div>
                        <div class="card-body">
                            <form id="frmInputs">
                                <input type="text" name="txtnmRequestno" id="inputnmRequestno" hidden>
                                <input type="text" name="txtnmAccountname" id="inputnmAccountname" class="form-control form-control-lg" placeholder="Account Name" style="margin-bottom: 1em;" autocomplete="off">
                                <input type="text" name="txtnmAmount" id="inputnmAmount" class="form-control form-control-lg" placeholder="Amount" style="margin-bottom: 1em;" autocomplete="off">
                                <textarea name="txtnmDescription" id="inputnmDescription" class="form-control form-control-lg" style="height: 150px;" placeholder="Description"></textarea>
                            </form>
                            <button class="btn btn-primary btn-lg" id="btnUpdate" style="margin-top: 1em; width: 100%;" disabled>Update</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card" style="background-color: #4eb562; overflow-y: scroll; height: 540px; scrollbar-width: thin; scrollbar-color: #27990b #b8d9b0; border-radius:0px;">
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered table-success" id="tblUpdate">
                                <thead>
                                    <tr style="vertical-align: middle;">
                                        <th colspan="3" style="font-size: 25pt;">Request Drawer</th>
                                        <th colspan="3">
                                            <input type="text" name="txtnmSearchTerm" class="form-control form-control-lg" placeholder="Search Term" id="inputnmSearchTerm">
                                        </th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th style="width: 13%;">Request ID</th>
                                        <th style="width: 20%;">Account Name</th>
                                        <th style="width: 30%;">Description</th>
                                        <th style="width: 15%;">Amount</th>
                                        <th style="width: 18%;">Action</th>
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

            $('#inputnmAmount').keypress(function(e){    
        
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9,.]/g))
                return false;                        

            });

            $('#inputnmAmount').keyup(function(event) {

                $(this).val(function(index, value) {
                    value = value.replace(/,/g,'');
                    return numberWithCommas(value);
                });
            });

            function numberWithCommas(x){
                var parts = x.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }

            $('#inputnmAmount').keypress(function(event) {
                if(event.which == 46
                && $(this).val().indexOf('.') != -1) {
                    event.preventDefault();
                } // prevent if already decimal point
                
                if(event.which != 46 && (event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                } // prevent if not number/dot
            });

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
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-primary btn-sm" id="btnEdit" ${x.activeButton}><i class="fa-solid fa-pen"></i> Edit</button>
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}><i class="fa-solid fa-paper-plane"></i> Process</button>
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
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-primary btn-sm" id="btnEdit" ${x.activeButton}><i class="fa-solid fa-pen"></i> Edit</button>
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}><i class="fa-solid fa-paper-plane"></i> Process</button>
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

            $(document).on("click", "#btnEdit", function(){
                $("#inputnmRequestno").val($(this).data("requestno"));
                $("#inputnmAccountname").val($(this).data("accountname"));
                $("#inputnmAmount").val($(this).data("amount"));
                $("#inputnmDescription").val($(this).data("description"));
                $("#btnUpdate").prop("disabled", false);
            });

            $(document).on("click", "#btnProcess", function(e){
                e.preventDefault();
                var requestno = $(this).data("requestno");
                var accountname = $(this).data("accountname");
                var amount = $(this).data("amount");
                var description = $(this).data("description");

                if(confirm(`Are you sure you want to process the request for ${accountname} with amount ${amount}?`)){
                    $.ajax({
                        url:"Update/requestProcess_c",
                        type:"POST",
                        data: {
                            txtnmRequestno: requestno
                        },
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                alert("Request processed successfully.");
                                viewData_v();
                            }else{
                                alert("Error processing request: " + response.error);
                            }
                        }
                    });
                }
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
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-primary btn-sm" id="btnEdit" ${x.activeButton}><i class="fa-solid fa-pen"></i> Edit</button>
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}><i class="fa-solid fa-paper-plane"></i> Process</button>
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
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-primary btn-sm" id="btnEdit" ${x.activeButton}><i class="fa-solid fa-pen"></i> Edit</button>
                                            <button data-requestno="${x.request_no}" data-accountname="${x.accountname}" data-amount="${x.amount}" data-description="${x.description}" class="btn btn-success btn-sm" id="btnProcess" ${x.activeButton}><i class="fa-solid fa-paper-plane"></i> Process</button>
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

            $("#btnUpdate").on("click", function(e){
                e.preventDefault();
                $.ajax({
                    url:"Update/updateRequestdata_c",
                    type:"POST",
                    data:$("#frmInputs").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            alert("Request updated successfully.");
                            $("#frmInputs")[0].reset();
                            viewData_v();
                            $("#btnUpdate").prop("disabled", true);
                        }else{
                            alert("Error updating request: " + response.error);
                        }
                    }
                })
            })
        });
    </script>