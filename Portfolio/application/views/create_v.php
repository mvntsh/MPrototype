    <style type="text/css">
        @media screen{
            .form-control{
                background-color: #abc7a3;
            }

            .form-control:focus{
                background-color: #abc7a3;
                font-weight: bolder;
            }
        }
    </style>
    <div class="row" style="margin-top: 2em; margin-bottom: 3em;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; background-color: #81ad74; zoom: 80%; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;" id="cardCreate">
                <div class="card-body">
                    <h1 class="text-center" style="letter-spacing: 2px; text-transform: uppercase; font-weight: bolder; color: #e7ebe6;"><?php echo $title; ?></h1>
                    <div style="margin-top: 3em;">
                        <form id="frmInputs">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="txtnmRequestid" id="inputnmRequestid" placeholder="Request ID" autocomplete="off">
                                <label for="inputnmRequestid">Request ID</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="txtnmAccountname" id="inputnmAccountname" placeholder="Account Name" autocomplete="off">
                                <label for="inputnmAccountname">Account Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="txtnmRequestdate" id="inputnmRequestdate" placeholder="Request Date" autocomplete="off">
                                <label for="inputnmRequestdate">Request Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="txtnmAmount" id="inputnmAmount" placeholder="Amount" autocomplete="off">
                                <label for="inputnmAmount">Amount</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" name="txtnmTransactiontype" id="inputnmTransactiontype" autocomplete="off">
                                    <option value="Funding">Funding</option>
                                    <option value="CA">Cash Advance</option>
                                </select>
                                <label for="inputnmTransactiontype">Transaction type</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="txtnmDescription" id="inputnmDescription" style="height: 6em;" placeholder="Description" autocomplete="off"></textarea>
                                <label for="inputnmDescription">Description</label>
                            </div>
                            <input type="text" value="1" name="txtnmRegionrequest" id="inputnmRegionrequest" hidden>
                            <input type="text" value="Request" name="txtnmRequeststatus" id="inputnmRequeststatus" hidden>
                        </form>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4 d-grid">
                                <button class="btn btn-primary btn-lg" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;" id="btnSave">Send request.</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#inputnmRequestid').keypress(function(e){    
        
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9]/g))
                return false;                        

            });

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

            $("#btnSave").click(function(){
                requestExists_v();
            });

            function requestExists_v(){
                $.ajax({
                    url: "Create/requestExists_c",
                    type: "POST",
                    data: {request_id: $("#inputnmRequestid").val()},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            saveFile_v();
                        } else {
                            alert(response.error);
                            $("#inputnmRequestid").val("").focus();
                        }
                    },
                    error: function(){
                        alert("An error occurred while checking the request ID.");
                    }
                });
            }

            function saveFile_v(){
                $.ajax({
                    url: "Create/saveFile_c",
                    type: "POST",
                    data: $("#frmInputs").serialize(),
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            alert("Request sent successfully!");
                            $("#frmInputs")[0].reset();
                            $("#inputnmRequestid").focus();
                        } else {
                            alert("Failed to send request. Please input empty fields.");
                        }
                    },
                    error: function(){
                        alert("An error occurred while processing your request.");
                    }
                });
            }
        })
    </script>