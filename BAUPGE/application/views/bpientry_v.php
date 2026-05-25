    <div class="row" style="margin: .5em; cursor: default;">
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; height: 580px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                <div class="card-body">
                    <form id="frmBank">
                        <div hidden>
                            <input type="text" name="nmOrigin" value="BPI" >
                            <input type="text" name="nmTransactionStatus" value="Processed">
                        </div>
                        <h4>Bank Details.</h4>
                        <div style="margin-top: 3em;">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="nmAccountType" id="idAccountType" aria-label="Floating label select example" style="background-color: #fce9c7; border-color: transparent;">
                                    <option value="Enrolled">Enrolled</option>
                                    <option value="Unenrolled">Unenrolled</option>
                                    <option value="Own">Own</option>
                                </select>
                                <label for="idAccountType" style="letter-spacing: -2px;"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i> Account type</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="nmTransactionType" id="idTransactionType" aria-label="Floating label select example" style="background-color: #fce9c7; border-color: transparent;">
                                    <option value="Accountabilities">Accountabilities</option>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Calamity fund">Calamity fund</option>
                                    <option value="Car-Loan">Car-Loan</option>
                                    <option value="Cash Advance">Cash Advance</option>
                                    <option value="Collection">Collection</option>
                                    <option value="Constructions">Constructions</option>
                                    <option value="Consultancy fee">Consultancy fee</option>
                                    <option value="GCash">GCash</option>
                                    <option value="MCash Accountability">MCash Accountability</option>
                                    <option value="ML Fund Accountability">ML Fund Accountability</option>
                                    <option value="ML Fund Collection">ML Fund Collection</option>
                                    <option value="ML Influencer">ML Influencer</option>
                                    <option value="ML-Loans">ML-Loans</option>
                                    <option value="MLX Agents">MLX Agents</option>
                                    <option value="MLX Collection">MLX Collection</option>
                                    <option value="Placement Fee">Placement Fee</option>
                                    <option value="Professional Fee">Professional Fee</option>
                                    <option value="Quit Claim">Quit Claim</option>
                                    <option value="Refund">Refund</option>
                                    <option value="Remittance">Remittance</option>
                                    <option value="Rental">Rental</option>
                                    <option value="Replenishment">Replenishment</option>
                                    <option value="Representation Expense">Representation Expense</option>
                                    <option value="Security Guard">Security Guard</option>
                                    <option value="Software Maintenance">Software Maintenance</option>
                                    <option value="Sponsorship">Sponsorship</option>
                                    <option value="Supplier">Supplier</option>
                                    <option value="SW-Rental">SW-Rental</option>
                                    <option value="Taxes & Licenses">Taxes & Licenses</option>
                                    <option value="Telecomms">Telecomms</option>
                                    <option value="Vis-Advertising">Vis-Advertising</option>
                                    <option value="Vis-Supplier">Vis-Supplier</option>
                                </select>
                                <label for="idTransactionType" style="letter-spacing: -2px;"><i class="fa-solid fa-2" style="color: rgb(156, 12, 12);"></i> Transaction type</label>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nmAccountname" class="form-control" id="idAccountname" placeholder="1" style="background-color: #fce9c7; border-color: transparent;" autocomplete="off">
                                        <label for="idAccountname" style="letter-spacing: -2px;"><i class="fa-solid fa-3" style="color: rgb(156, 12, 12);"></i> Account Name.</label>
                                    </div>
                                </div>
                                <div class="col-md-2 d-grid">
                                    <button id="btnAccountname" type="button" data-bs-toggle="modal" data-bs-target="#accountModal" class="btn btn-warning btn-block" style="letter-spacing: -2px; height: 3.4em;"><i class="fa-solid fa-magnifying-glass" style="color: rgb(44, 42, 42);"></i> Search.</button>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmAccountno" class="form-control" id="idAccountno" placeholder="1" style="background-color: #fce9c7; border-color: transparent;" autocomplete="off">
                                <label for="idAccountno" style="letter-spacing: -2px;"><i class="fa-solid fa-4" style="color: rgb(156, 12, 12);"></i> Account No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="nmDate" class="form-control" id="idDate" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idDate" style="letter-spacing: -2px;"><i class="fa-solid fa-5" style="color: rgb(156, 12, 12);"></i> Date</label>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 d-grid">
                            <button id="btnProceed" class="btn btn-primary btn-lg" style="letter-spacing: -2px; border-radius: 0px;"><i class="fa-solid fa-arrow-right" style="color: rgb(239, 242, 238);"></i>PROCEED.</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; height: 580px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; display: none;" id="idInhouseDetails">
                <div class="card-body">
                    <h4>In-house Details.</h4>
                    <div style="margin-top: 3em;">
                        <form id="frmInhouse">
                            <div class="form-floating mb-3">
                                <input type="text" name="nmRequestno" class="form-control" id="idRequestNo" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idRequestNo" style="letter-spacing: -2px;"><i class="fa-solid fa-1" style="color: rgb(156, 12, 12);"></i> Request No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmAmount" class="form-control" id="idAmount" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idAmount" style="letter-spacing: -2px;"><i class="fa-solid fa-2" style="color: rgb(156, 12, 12);"></i> Amount.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmVoucherNo" class="form-control" id="idVoucherNo" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idVoucherNo" style="letter-spacing: -2px;"><i class="fa-solid fa-3" style="color: rgb(156, 12, 12);"></i> Voucher No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmBatchno" class="form-control" id="idBatchno" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idBatchno" style="letter-spacing: -2px;"><i class="fa-solid fa-4" style="color: rgb(156, 12, 12);"></i> Batch No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea type="text" name="nmDescription" class="form-control" id="idDescription" placeholder="1" style="background-color: #fce9c7; border-color: transparent; height: 100px;" rows="5"></textarea>
                                <label for="idDescription" style="letter-spacing: -2px;"><i class="fa-solid fa-5" style="color: rgb(156, 12, 12);"></i> Description</label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 d-grid">
                            <button id="btnSave" class="btn btn-success btn-lg" style="letter-spacing: -2px; border-radius: 0px;"><i class="fa-solid fa-arrow-up-right-from-square" style="color: rgb(239, 242, 238);"></i> SAVE.</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius: 0px;">
                <div class="modal-header" hidden>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table style="width: 100%;" class="table table-hover table-borderless table-striped" id="tblAccountname">
                        <tbody></tbody>
                    </table>
                </div>
                <div class="modal-footer" hidden>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#btnProceed").click(function(){
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url("bpientry/insert_bankvalidation_c"); ?>',
                    data: $("#frmBank").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            emptyBankDetails();
                            
                            $("#idInhouseDetails").fadeIn(500);
                            $("#idRequestNo").focus();
                        }else{
                            emptyBankDetails();
                        }
                    }
                })
            })

            function emptyBankDetails(){
                var idAccountname = $("#idAccountname").val();
                var idAccountno = $("#idAccountno").val();
                var idDate = $("#idDate").val();

                if(idAccountname==("")>0){
                    $("#idAccountname").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input account name.");
                    toastMessage();
                    $("#idAccountname").focus();
                }else if(idAccountno==("")>0){
                    $("#idAccountno").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input account number.");
                    toastMessage();
                    $("#idAccountno").focus();
                }else if(idDate==("")>0){
                    $("#idDate").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input date.");
                    toastMessage();
                    $("#idDate").focus();
                }else{
                    $("#idAccountname,#idAccountno,#idDate").removeClass("is-invalid");
                    $("#idAccountname,#idAccountno,#idDate").addClass("is-valid");
                    $("#idInhouseDetails").fadeOut(500);
                }
            }
            

            $("#btnSave").click(function(){
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url("bpientry/insert_inhousevalidation_c"); ?>',
                    data: $("#frmInhouse").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            emptyInhouseDetails();
                        }else{
                            emptyInhouseDetails();
                        }
                    }
                })
            })

            function emptyInhouseDetails(){
                var idRequestNo = $("#idRequestNo").val();
                var idAmount = $("#idAmount").val();
                var idVoucherNo = $("#idVoucherNo").val();
                var idBatchno = $("#idBatchno").val();
                var idDescription = $("#idDescription").val();
                

                if(idRequestNo==("")>0){
                    $("#idRequestNo").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input request number.");
                    toastMessage();
                }else if(idAmount==("")>0){
                    $("#idAmount").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input amount.");
                    toastMessage();
                }else if(idVoucherNo==("")>0){
                    $("#idVoucherNo").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input voucher number.");
                    toastMessage();
                }else if(idBatchno==("")>0){
                    $("#idBatchno").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input batch number.");
                    toastMessage();
                }else if(idDescription==("")>0){
                    $("#idDescription").addClass("is-invalid");
                    $("#toastMessage").css("background-color","#fce8e6").css("color","#750707").text("Input description.");
                    toastMessage();
                }else{
                    insert_bpi_v();
                }
            }

            function insert_bpi_v(){
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url("bpientry/insert_bpi_c"); ?>',
                    data: $("#frmBank,#frmInhouse,#idRegion,#idUser_id").serialize(),
                    dataType:'json',
                    success:function(response){
                        $("#toastMessage").css("background-color","#e6fce6").css("color","#0b450d").text("Saved successfully.");
                        toastMessage();
                        $("#idRequestNo,#idAmount,#idVoucherNo,#idBatchno,#idDescription").removeClass("is-invalid");
                        $("#idRequestNo,#idAmount,#idVoucherNo,#idBatchno,#idDescription").addClass("is-valid");
                        $("#idAccountno,#idRequestNo,#idAmount,#idVoucherNo,#idBatchno,#idDescription").val("");
                        $("#idAccountname").val("").focus();
                    }
                })
            }

            $("#btnAccountname").click(function(e){
                e.preventDefault();
                showAccountnamebpi_v();
            })
            function showAccountnamebpi_v(){
                $.ajax({
                    type: 'POST',
                    url:'<?php echo base_url("bpientry/showAccountnamebpi_c"); ?>',
                    data:$("#idAccountname,#idTransactionType,#idRegion").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody ='';

                            response.data.forEach(function(data){
                                tbody += `
                                    <tr id="btnSelectaccountname" data-account-name="${data.account_name}" data-account-no="${data.account_no}" style="height: 3em; cursor: pointer; vertical-align: middle;">
                                        <td style="width: 10%"><i class="fa-solid fa-circle-user fa-beat" style="color: rgb(44, 42, 42);"></i></td>
                                        <td style="width: 90%; letter-spacing: -2px; text-transform: uppercase; font-weight: bolder">${data.account_name} <i class="fa-solid fa-caret-right" style="color: rgb(44, 42, 42);"></i> ${data.account_no}</td>
                                    </tr>
                                `;
                            })
                            $("#tblAccountname tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click","#btnSelectaccountname", function(){
                var accountname = $(this).data("account-name");
                var accountno = $(this).data("account-no");

                $("#idAccountname").val(accountname);
                $("#idAccountno").val(accountno);
                $(".btn-close").click();
            })

            $('#idAccountno,#idBatch,#idRequestNo,#idVoucherNo').keypress(function(e){    
        
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9]/g))
                return false;                        

            });

            $('#idAmount').keypress(function(e){    
        
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9.,]/g))
                return false;                        

            });

            $('#idAmount').keyup(function(event) {

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

            $('#idAmount').keypress(function(event) {
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