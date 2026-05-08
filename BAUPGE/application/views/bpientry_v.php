    <div class="row" style="margin: .5em;">
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; height: 580px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                <div class="card-body">
                    <form id="frmBank">
                        <h4>Bank Details.</h4>
                        <div style="margin-top: 3em;">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="idAccountType" aria-label="Floating label select example" style="background-color: #fce9c7; border-color: transparent;">
                                    <option value="1">Enrolled</option>
                                    <option value="2">Unenrolled</option>
                                    <option value="3">Own</option>
                                </select>
                                <label for="idAccountType" style="letter-spacing: -2px;">Account type</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="idTransactionType" aria-label="Floating label select example" style="background-color: #fce9c7; border-color: transparent;">
                                    <option value="1">Accountabilities</option>
                                    <option value="2">Advertisement</option>
                                    <option value="3">Calamity fund</option>
                                    <option value="4">Car-Loan</option>
                                    <option value="5">Cash Advance</option>
                                    <option value="6">Collection</option>
                                    <option value="7">Constructions</option>
                                    <option value="8">Consultancy fee</option>
                                    <option value="9">GCash</option>
                                    <option value="10">MCash Accountability</option>
                                    <option value="11">ML Fund Accountability</option>
                                    <option value="12">ML Fund Collection</option>
                                    <option value="13">ML Influencer</option>
                                    <option value="14">ML-Loans</option>
                                    <option value="15">MLX Agents</option>
                                    <option value="16">MLX Collection</option>
                                    <option value="17">Placement Fee</option>
                                    <option value="18">Professional Fee</option>
                                    <option value="19">Quit Claim</option>
                                    <option value="20">Refund</option>
                                    <option value="21">Remittance</option>
                                    <option value="22">Rental</option>
                                    <option value="23">Replenishment</option>
                                    <option value="24">Representation Expense</option>
                                    <option value="25">Security Guard</option>
                                    <option value="26">Software Maintenance</option>
                                    <option value="27">Sponsorship</option>
                                    <option value="28">Supplier</option>
                                    <option value="29">SW-Rental</option>
                                    <option value="30">Taxes & Licenses</option>
                                    <option value="31">Telecomms</option>
                                    <option value="32">Vis-Advertising</option>
                                    <option value="33">Vis-Supplier</option>
                                </select>
                                <label for="idTransactionType" style="letter-spacing: -2px;">Transaction type</label>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nmAccountname" class="form-control" id="idAccountname" placeholder="1" style="background-color: #fce9c7; border-color: transparent;" autocomplete="off">
                                        <label for="idAccountname" style="letter-spacing: -2px;"> Account Name.</label>
                                    </div>
                                </div>
                                <div class="col-md-2 d-grid">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#accountModal" class="btn btn-warning btn-block" style="letter-spacing: -2px; height: 3.4em;"><i class="fa-solid fa-magnifying-glass" style="color: rgb(44, 42, 42);"></i> Search.</button>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmAccountno" class="form-control" id="idAccountno" placeholder="1" style="background-color: #fce9c7; border-color: transparent;" autocomplete="off">
                                <label for="idAccountno" style="letter-spacing: -2px;"> Account No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="nmDate" class="form-control" id="idDate" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idDate" style="letter-spacing: -2px;"> Date</label>
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
            <div class="card" style="border-radius: 0px; height: 580px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;" id="idInhouseDetails">
                <div class="card-body">
                    <h4>In-house Details.</h4>
                    <div style="margin-top: 3em;">
                        <form id="frmInhouse">
                            <div class="form-floating mb-3">
                                <input type="text" name="nmRequestno" class="form-control" id="idRequestNo" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idRequestNo" style="letter-spacing: -2px;"> Request No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmAmount" class="form-control" id="idAmount" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idAmount" style="letter-spacing: -2px;"> Amount.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmVoucherNo" class="form-control" id="idVoucherNo" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idVoucherNo" style="letter-spacing: -2px;"> Voucher No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nmBatchno" class="form-control" id="idBatch" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                                <label for="idBatch" style="letter-spacing: -2px;"> Batch No.</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea type="text" name="nmDescription" class="form-control" id="idDescription" placeholder="1" style="background-color: #fce9c7; border-color: transparent; height: 100px;" rows="5"></textarea>
                                <label for="idDescription" style="letter-spacing: -2px;"> Description</label>
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
                    <table style="width: 100%;" class="table table-hover table-borderless table-striped">
                        <tbody>
                            <tr style="height: 3em; cursor: pointer; vertical-align: middle;">
                                <td style="width: 10%"><i class="fa-solid fa-circle-user fa-beat" style="color: rgb(44, 42, 42);"></i></td>
                                <td style="width: 90%; letter-spacing: -2px; text-transform: uppercase; font-weight: bolder"><i class="fa-solid fa-caret-right" style="color: rgb(44, 42, 42);"></i>Lanao Del Norte Electric Cooperative Inc.</td>
                            </tr>
                            <tr style="height: 3em; cursor: pointer; vertical-align: middle;">
                                <td style="width: 10%"><i class="fa-solid fa-circle-user fa-beat" style="color: rgb(44, 42, 42);"></i></td>
                                <td style="width: 90%; letter-spacing: -2px; text-transform: uppercase; font-weight: bolder"><i class="fa-solid fa-caret-right" style="color: rgb(44, 42, 42);"></i>Lanao Del Norte Electric Cooperative Inc.</td>
                            </tr>
                            <tr style="height: 3em; cursor: pointer; vertical-align: middle;">
                                <td style="width: 10%"><i class="fa-solid fa-circle-user fa-beat" style="color: rgb(44, 42, 42);"></i></td>
                                <td style="width: 90%; letter-spacing: -2px; text-transform: uppercase; font-weight: bolder"><i class="fa-solid fa-caret-right" style="color: rgb(44, 42, 42);"></i>Lanao Del Norte Electric Cooperative Inc.</td>
                            </tr>
                            <tr style="height: 3em; cursor: pointer; vertical-align: middle;">
                                <td style="width: 10%"><i class="fa-solid fa-circle-user fa-beat" style="color: rgb(44, 42, 42);"></i></td>
                                <td style="width: 90%; letter-spacing: -2px; text-transform: uppercase; font-weight: bolder"><i class="fa-solid fa-caret-right" style="color: rgb(44, 42, 42);"></i>Lanao Del Norte Electric Cooperative Inc.</td>
                            </tr>
                        </tbody>
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
            $("#idInhouseDetails").css("display", "none");

            $("#btnProceed").click(function(){
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url("bpientry/insert_bankvalidation_c"); ?>',
                    data: $("#frmBank").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $("#idInhouseDetails").fadeIn(500);
                            $("#idAccountname,#idAccountno,#idDate").removeClass("is-invalid");
                            $("#idAccountname,#idAccountno,#idDate").addClass("is-valid");
                            $("#idRequestNo").focus();
                        }else{
                            emptyBankDetails();
                            $("#idInhouseDetails").fadeOut(500);
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
                }else if(idAccountno==("")>0){
                    $("#idAccountno").addClass("is-invalid");
                }else if(idDate==("")>0){
                    $("#idDate").addClass("is-invalid");
                }else{
                    $("#idAccountname,#idAccountno,#idDate").removeClass("is-invalid");
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
                            alert("Data saved successfully!");
                            $("#idRequestNo,#idAmount,#idVoucherNo,#idDate,#idBatchno").removeClass("is-invalid");
                            $("#idRequestNo,#idAmount,#idVoucherNo,#idDate,#idBatchno").addClass("is-valid");
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
                

                if(idRequestNo==("")>0){
                    $("#idRequestNo").addClass("is-invalid");
                }else if(idAmount==("")>0){
                    $("#idAmount").addClass("is-invalid");
                }else if(idVoucherNo==("")>0){
                    $("#idVoucherNo").addClass("is-invalid");
                }else if(idDate==("")>0){
                    $("#idDate").addClass("is-invalid");
                }else if(idBatchno==("")>0){
                    $("#idBatchno").addClass("is-invalid");
                }else{
                    $("#idRequestNo,#idAmount,#idVoucherNo,#idDate,#idBatchno").removeClass("is-invalid");
                }
            }

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