<div class="row" style="margin-top: 2em; margin-bottom: 3em;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card" style="border-radius: 0px; background-color: #D4D7D9;">
            <div class="card-body">
                <h1 class="text-center"><?php echo $title; ?></h1>
                <div style="margin-top: 3em;">
                    <form id="frmInputs">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtnmRequestid" id="inputnmRequestid" placeholder="Request ID">
                            <label for="inputnmRequestid">Request ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtnmAccountname" id="inputnmAccountname" placeholder="Account Name">
                            <label for="inputnmAccountname">Account Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="txtnmRequestdate" id="inputnmRequestdate" placeholder="Request Date">
                            <label for="inputnmRequestdate">Request Date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtnmAmount" id="inputnmAmount" placeholder="Amount">
                            <label for="inputnmAmount">Amount</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="txtnmTransactiontype" id="inputnmTransactiontype">
                                <option value="Funding">Funding</option>
                                <option value="CA">Cash Advance</option>
                            </select>
                            <label for="inputnmTransactiontype">Transaction type</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="txtnmDescription" id="inputnmDescription" style="height: 6em;" placeholder="Description"></textarea>
                            <label for="inputnmDescription">Description</label>
                        </div>
                        <input type="text" value="1" name="txtnmRegionrequest" id="inputnmRegionrequest" hidden>
                        <input type="text" value="Request" name="txtnmRequeststatus" id="inputnmRequeststatus" hidden>
                    </form>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 d-grid">
                            <button class="btn btn-primary">Send request.</button>
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
        alert("hello world;");
    })
</script>