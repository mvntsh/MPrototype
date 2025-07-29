<div class="row" style="margin-top: 2em; margin-bottom: 3em;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card" style="border-radius: 0px; background-color: #D4D7D9;">
            <div class="card-body">
                <h1 class="text-center"><?php echo $title; ?></h1>
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
                            <button class="btn btn-primary" id="btnSave">Send request.</button>
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