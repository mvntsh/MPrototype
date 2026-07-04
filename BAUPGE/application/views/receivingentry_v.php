
    <style type="text/css">
        @media screen{
            .form-control{
                border-radius: 0px;
                background-color: rgb(247, 223, 223, .8);
                border-color: rgb(247, 223, 223, .8);
            }
        }
    </style>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="margin-left: .3em; border-radius: 0px; overflow-y: scroll; height: 600px; scrollbar-width: thin; scrollbar-color: #828282 #e6e8e6; border-radius: 0px; border-color: transparent; background-color: rgb(10, 10, 10, 0.8); box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                <div class="card-body">
                    <h4 class="card-title" style="text-transform: uppercase; color: rgb(235, 235, 235);">Receiving.</h4>
                    <form id="frmInfo" style="margin-top: 1.8em;">
                        <div class="form-floating mb-3">
                            <input type="text" name="nmRequest_id" class="form-control" id="idnmRequest_id" placeholder="1" autocomplete="off">
                            <label for="idnmRequest_id"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i> Request ID</label>
                        </div>
                        <div class="input-group">
                            <div class="form-floating mb-3">
                                <input type="text" name="nmAccount_no" class="form-control" id="idnmAccount_no" placeholder="2" autocomplete="off">
                                <label for="idnmAccount_no"><i class="fa-solid fa-2" style="color: rgb(156, 12, 12);"></i> Account No./Mobile No.</label>
                            </div>
                            <i id="searchAccountno" class="fa-solid fa-magnifying-glass" style="color: rgb(187, 179, 179); font-size: 25pt; margin: .3em;"></i>
                        </div>
                        <table id="tblPayee" class="table hover" hidden>
                            <tbody></tbody>
                        </table>
                        <div class="form-floating mb-3">
                            <input type="text" name="nmPayee" class="form-control" id="idnmPayee" placeholder="3" autocomplete="off">
                            <label for="idnmPayee"><i class="fa-solid fa-3" style="color: rgb(156, 12, 12);"></i> Payee</label>
                        </div>
                        <div class="input-group">
                            <div class="form-floating mb-3">
                                <input type="text" name="nmCost_center" class="form-control" id="idnmCost_center" placeholder="4" autocomplete="off">
                                <label for="idnmCost_center"><i class="fa-solid fa-4" style="color: rgb(156, 12, 12);"></i> Cost Center</label>
                            </div>
                            <i id="showCostcenter" data-bs-toggle="modal" data-bs-target="#modalforCostcenter" class="fa-solid fa-bolt" style="color: rgb(187, 179, 179); font-size: 25pt; margin: .3em;"></i>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" name="nmDate_received" class="form-control" id="idnmDate_received" placeholder="5" autocomplete="off">
                            <label for="idnmDate_received"><i class="fa-solid fa-5" style="color: rgb(156, 12, 12);"></i> Date Received</label>
                        </div>
                        <div class="input-group">
                            <div class="form-floating mb-3">
                                <input type="text" name="nmTransaction_type" class="form-control" id="idnmTransaction_type" placeholder="6" autocomplete="off">
                                <label for="idnmTransaction_type"><i class="fa-solid fa-6" style="color: rgb(156, 12, 12);"></i> Transaction Type</label>
                            </div>
                            <i id="showTransactiontype" data-bs-toggle="modal" data-bs-target="#modalforTransactiontype" class="fa-solid fa-bolt" style="color: rgb(197, 194, 194); font-size: 25pt; margin: .3em;"></i>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" name="nmPayable_amount" class="form-control" id="idnmPayable_amount" placeholder="7" autocomplete="off">
                            <label for="idnmPayable_amount"><i class="fa-solid fa-7" style="color: rgb(156, 12, 12);"></i> Amount</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="nmReceiving_description" class="form-control" placeholder="8" id="idnmReceiving_description" style="height: 100px" autocomplete="off"></textarea>
                            <label for="idnmReceiving_description"><i class="fa-solid fa-8" style="color: rgb(156, 12, 12);"></i> Description</label>
                        </div>
                        <input type="text" name="nmReceiving_status" value="Received" id="idnmReceiving_status" hidden>
                    </form>
                    <div class="d-grid">
                        <button class="btn btn-success btn-lg" id="btnSubmit" style="border-radius: 0px; text-transform: uppercase;">Submit.</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" style=" border-radius: 0px; background-color: rgb(10, 10, 10, 0.8); margin-right: .3em; box-shadow: rgba(92, 90, 11, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase; color: rgb(235, 235, 235); margin-top: .7em;" class="card-title">Received Data.</h4>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="search" name="nmSearch" class="form-control" id="idnmSearch" placeholder="">
                                    <label for="idnmSearch"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i> Search</label>
                                </div>
                                <i id="btnSearch" class="fa-solid fa-magnifying-glass fa-beat-fade" style="color: white; font-size: 20pt; margin: .6em;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="background-color: transparent; margin-top: 1.8em; border-radius: 0px; overflow-y: scroll; height: 480px; scrollbar-width: thin; scrollbar-color: #828282 #e6e8e6;">
                        <table id="tblRequests" style="cursor: default; width: 100%; zoom: 75%; border-collapse: collapse; border-color: transparent;" class="table table-dark table-striped table-hover">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle; text-transform: uppercase; height: 3.5em;">
                                    <th style="width: 10%;">Request ID</th>
                                    <th style="width: 15%;">Payee</th>
                                    <th style="width: 15%;">Cost Center</th>
                                    <th style="width: 15%;">Date Received</th>
                                    <th style="width: 15%;">Amount</th>
                                    <th style="width: 20%;">Description</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalforCostcenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius: 0px; background-color: rgb(179, 177, 177, .8)">
            <div class="modal-header" style="border-color: transparent;">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-street-view" style="color: rgb(156, 12, 12); font-size: 16pt;"></i> Choose a Cost Center</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnCloseCostcenter"></button>
            </div>
            <div class="modal-body">
                <table id="tblCostcenter" class="table table-secondary table-striped table-hover" style="width: 100%;">
                    <tbody>
                        <tr style="cursor: pointer; text-transform: uppercase; height: 3.5em; vertical-align: middle;">
                            <td><i class="fa-solid fa-location-crosshairs fa-fade" style="color: rgb(156, 12, 12);"></i> Cost Center 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer" style="border-color: transparent;">
                <a href="#" data-bs-dismiss="modal" style="border-radius: 0px; color: #ffd900;" id="labelCreatecc">Create new Cost Center.</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" hidden>Close</button>
                <button type="button" class="btn btn-primary" hidden>Understood</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalforTransactiontype" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius: 0px; background-color: rgb(179, 177, 177, .8)">
            <div class="modal-header" style="border-color: transparent;">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Choose a Transaction Type</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnClosetransactiontype"></button>
            </div>
            <div class="modal-body">
                <table id="tblTransactiontype" class="table table-secondary table-striped table-hover" style="width: 100%;">
                    <tbody>
                        <tr style="cursor: pointer; text-transform: uppercase; height: 3.5em; vertical-align: middle;">
                            <td><i class="fa-solid fa-arrow-pointer fa-rotate-90" style="color: rgb(156, 12, 12);"></i> Transaction type 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer" style="border-color: transparent;">
                <a href="#" data-bs-dismiss="modal" style="border-radius: 0px; color: #ffd900;" id="labelCratett">Create new Transaction type.</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" hidden>Close</button>
                <button type="button" class="btn btn-primary" hidden>Understood</button>
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#labelCreatecc").click(function(e){
                e.preventDefault();
                $("#idnmCost_center").val("").focus();
            })

            $("#labelCratett").click(function(e){
                e.preventDefault();
                $("#idnmTransaction_type").val("").focus();
            })

            viewRequests_v();
            viewCostcenter_v();
            viewTransactiontype_v();
            function viewCostcenter_v(){
                $.ajax({
                    method: "post",
                    url: "<?php echo base_url('receivingentry/viewCostcenter_c'); ?>",
                    dataType: "json",
                    success:function(response){
                        if(response.success){
                            var tbody = 'Create New Cost Center';

                            response.data.forEach(function(query){
                                tbody += `
                                    <tr data-costcenter="${query.cost_center}" id="selectCost_center" style="cursor: pointer; text-transform: uppercase; height: 3.5em; vertical-align: middle;">
                                        <td><i class="fa-solid fa-location-crosshairs fa-fade" style="color: rgb(156, 12, 12);"></i> ${query.cost_center}</td>
                                    </tr>
                                `;
                            });

                            $("#tblCostcenter tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click", "#selectCost_center",function(e){
                e.preventDefault();

                $("#idnmCost_center").val($(this).data("costcenter"));
                $("#btnCloseCostcenter").click();

            })

            $(document).on("click", "#btnSubmit", function(){
                insert_bankvalidation_v();
            });

            function insert_bankvalidation_v(){
                $.ajax({
                    method: "post",
                    url: "<?php echo base_url('receivingentry/insert_bankvalidation_c'); ?>",
                    data: $("#frmInfo").serialize(),
                    dataType: "json",
                    success: function(response){
                        if(response.success == true){
                            $("#idnmRequest_id,#idnmAccount_no,#idnmPayee,#idnmCost_center,#idnmDate_received,#idnmTransaction_type,#idnmPayable_amount,#idnmReceiving_description").removeClass("is-invalid");
                            receivedRequest_v();
                        }else{
                            emptyFields();
                        }
                    }
                })
            }

            function receivedRequest_v(){
                $.ajax({
                    method: "post",
                    url: "<?php echo base_url('receivingentry/receivedRequest_c'); ?>",
                    data: $("#frmInfo").serialize(),
                    dataType: "json",
                    success:function(response){
                        if(response.success){
                            $("#idnmRequest_id,#idnmAccount_no,#idnmPayee,#idnmCost_center,#idnmDate_received,#idnmTransaction_type,#idnmPayable_amount,#idnmReceiving_description").addClass("is-valid");
                            $("#toastMessage").css("background-color","#c7f2d2").css("color","#044014").text("Saved successfully.");
                            toastMessage();
                            $("#frmInfo")[0].reset();
                            viewRequests_v();
                        }
                    }
                })
            }

            function emptyFields(){
                var idnmRequest_id = $("#idnmRequest_id").val();
                var idnmAccount_no = $("#idnmAccount_no").val();
                var idnmPayee = $("#idnmPayee").val();
                var idnmCost_center = $("#idnmCost_center").val();
                var idnmDate_received = $("#idnmDate_received").val();
                var idnmTransaction_type = $("#idnmTransaction_type").val();
                var idnmPayable_amount = $("#idnmPayable_amount").val();
                var idnmReceiving_description = $("#idnmReceiving_description").val();

                if(idnmRequest_id==("")>0){
                    $("#idnmRequest_id").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Request id.");
                    toastMessage();
                    $("#idnmRequest_id").focus();
                }else if(idnmAccount_no ==("")>0){
                    $("#idnmAccount_no").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Account number.");
                    toastMessage();
                    $("#idnmAccount_no").focus();
                }else if(idnmPayee ==("")>0){
                    $("#idnmPayee").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Payee.");
                    toastMessage();
                    $("#idnmPayee").focus();
                }else if(idnmCost_center ==("")>0){
                    $("#idnmCost_center").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Cost center.");
                    toastMessage();
                    $("#idnmCost_center").focus();
                }else if(idnmDate_received ==("")>0){
                    $("#idnmDate_received").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Date received.");
                    toastMessage();
                    $("#idnmDate_received").focus();
                }else if(idnmTransaction_type ==("")>0){
                    $("#idnmTransaction_type").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Transaction type.");
                    toastMessage();
                    $("#idnmTransaction_type").focus();
                }else if(idnmPayable_amount ==("")>0){
                    $("#idnmPayable_amount").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Payable amount.");
                    toastMessage();
                    $("#idnmPayable_amount").focus();
                }else if(idnmReceiving_description ==("")>0){
                    $("#idnmReceiving_description").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Please input Receiving description.");
                    toastMessage();
                    $("#idnmReceiving_description").focus();
                }
            }

            function viewRequests_v(){
                $.ajax({
                    method: "post",
                    url: "<?php echo base_url('receivingentry/viewRequests_c'); ?>",
                    dataType: "json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(query){
                                tbody += `
                                    <tr style="text-align: center; vertical-align: middle; height: 3.5em;" class="animate__animated  animate__fadeInLeft">
                                        <td style="width: 10%; text-align: center; vertical-align: middle; color: ${query.regionColor}; font-weight: bold;"><i class="fa-solid fa-caret-right" style="color: ${query.statusColor};"></i> ${query.request_id}</td>
                                        <td style="width: 15%; text-align: left; vertical-align: middle; text-transform: uppercase; letter-spacing: -1px;">${query.payee}</td>
                                        <td style="width: 15%; text-align: left; vertical-align: middle;">${query.cost_center}</td>
                                        <td style="width: 15%; text-align: center; vertical-align: middle;">${query.date_received}</td>
                                        <td style="width: 15%; text-align: right; vertical-align: middle;">${query.payable_amount}</td>
                                        <td style="width: 20%; text-align: left;vertical-align: middle; letter-spacing: -1px;">${query.receiving_description}</td>
                                    </tr>
                                `;
                            })
                            $("#tblRequests tbody").html(tbody);
                            $("#idnmRequest_id,#idnmAccount_no,#idnmPayee,#idnmCost_center,#idnmDate_received,#idnmTransaction_type,#idnmPayable_amount,#idnmReceiving_description").removeClass("is-valid");
                            $("#idnmRequest_id").focus();
                        }
                    }
                })
            }

            $(document).on("click","#btnSearch",function(e){
                e.preventDefault();
                var idnmSearch = $("#idnmSearch").val();

                if(idnmSearch ==("")>0){
                    viewRequests_v();
                }else{
                    searchRequests_v();
                }
            })

            function searchRequests_v(){
                $.ajax({
                    type:"post",
                    url: "<?php echo base_url('receivingentry/searchRequests_c'); ?>",
                    data:$("#idnmSearch").serialize(),
                    dataType: "json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(query){
                                tbody += `
                                    <tr style="text-align: center; vertical-align: middle; height: 3.5em;">
                                        <td style="width: 10%; text-align: center; vertical-align: middle; color: ${query.regionColor}; font-weight: bold;"><i class="fa-solid fa-caret-right" style="color: ${query.statusColor};"></i> ${query.request_id}</td>
                                        <td style="width: 15%; text-align: left; vertical-align: middle; text-transform: uppercase; letter-spacing: -1px;">${query.payee}</td>
                                        <td style="width: 15%; text-align: left; vertical-align: middle;">${query.cost_center}</td>
                                        <td style="width: 15%; text-align: center; vertical-align: middle;">${query.date_received}</td>
                                        <td style="width: 15%; text-align: right; vertical-align: middle;">${query.payable_amount}</td>
                                        <td style="width: 20%; text-align: left;vertical-align: middle; letter-spacing: -1px;">${query.receiving_description}</td>
                                    </tr>
                                `;
                            })
                            $("#tblRequests tbody").html(tbody);
                        }else{
                            $("#tblRequests tbody").html("<tr><td colspan='7' style='text-align: center; vertical-align: middle;'>No data found.</td></tr>");
                        }
                    }
                })
            }

            $(document).on("click","#searchAccountno",function(e){
                e.preventDefault();
                searchRequestor_v();
            })

            function searchRequestor_v(){
                $.ajax({
                    type:"post",
                    url:"<?php echo base_url('receivingEntry/searchRequestor_c');?>",
                    data:$("#idnmAccount_no").serialize(),
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody ='';

                            response.data.forEach(function(query){
                                tbody +=`
                                    <tr id="selectAccountno" data-accountno="${query.account_no}" data-payee="${query.payee}" data-costcenter="${query.cost_center}" data-transactiontype="${query.transaction_type}" data-description="${query.receiving_description}">
                                        <td>
                                            <button>Select</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblPayee tbody").html(tbody);
                            $("#selectAccountno").click();
                        }
                    }
                })
            }

            $(document).on("click","#selectAccountno",function(e){
                e.preventDefault();

                $("#idnmPayee").val($(this).data("payee"));
                $("#idnmCost_center").val($(this).data("costcenter"));
                $("#idnmTransaction_type").val($(this).data("transactiontype"));
                $("#idnmReceiving_description").val($(this).data("description"));

                $("#idnmAccount_no,#idnmPayee,#idnmCost_center,#idnmTransaction_type,#idnmReceiving_description").addClass("is-valid");

                $("#idnmDate_received").focus();
            })

            function viewTransactiontype_v(){
                $.ajax({
                    type:"post",
                    url:"<?php echo base_url("receivingEntry/viewTransactiontype_c");?>",
                    dataType:"json",
                    success:function(response){
                        if(response.success){
                            var tbody = '';
                            
                            response.data.forEach(function(query){
                                tbody += `
                                    <tr id="selectTransactiontype" data-transactiontype="${query.transaction_type}" style="cursor: pointer; text-transform: uppercase; height: 3.5em; vertical-align: middle;">
                                        <td><i class="fa-solid fa-arrow-pointer fa-rotate-90" style="color: rgb(156, 12, 12);"></i> ${query.transaction_type}</td>
                                    </tr>
                                `;
                            })
                            $("#tblTransactiontype tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click","#selectTransactiontype",function(e){
                e.preventDefault();

                $("#idnmTransaction_type").val($(this).data("transactiontype"));

                $("#btnClosetransactiontype").click();
            })

            $('#idnmPayable_amount').keypress(function(e){    
        
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9,.]/g))
                return false;                        

            });

            $('#idnmPayable_amount').keyup(function(event) {

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

            $('#idnmPayable_amount').keypress(function(event) {
                if(event.which == 46
                && $(this).val().indexOf('.') != -1) {
                    event.preventDefault();
                } // prevent if already decimal point
                
                if(event.which != 46 && (event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                } // prevent if not number/dot
            });
        })
    </script>