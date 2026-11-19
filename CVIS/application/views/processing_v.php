<style class="text/css">
    @media screen{
        .form-control, .form-select {
            border-radius: 0px;
            background-color: #e4d4ff;
        }

        .btn{
            border-radius: 0px;
        }

        #printArea {
            display: none;
        }

        .screenArea{
            zoom:80%;
        }
    }

    @media print{
        body {
            background-color: #ffffff;
        }

        .screenArea {
            display: none;
        }
    }
</style>
<div class="row screenArea">
    <div class="col-md-4">
        <div class="card" style="margin-left:.3em; color: #ffffff; background-color: #341763; border-radius: 0px; margin-top: .5em;">
            <div class="card-body">
                <h5 style="text-transform: uppercase;">Entry</h5>
                <p style="font-size: 7pt;">Check / Non-Check</p>
                <form id="frmEntry">
                    <div hidden>
                        <input type="text" name="txtAccountno" value="1301032729">
                        <input type="text" name="txtAvailableamount" id="nmAvailableamount">
                    </div>
                    <div class="form-floating mb-3">
                        <select name="txtVouchertype" class="form-select" id="nmVouchertype" aria-label="Floating label select example">
                            <option value="1">Voucher with Check</option>
                            <option value="2">Voucher only / Non-check</option>
                        </select>
                        <label for="nmVouchertype">Voucher Type *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txtRfpno" class="form-control" id="nmRfpno" placeholder="RFP No.">
                        <label for="nmRfpno">RFP No. *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txtPayee" class="form-control" id="nmPayee" placeholder="Payee">
                        <label for="nmPayee">Payee *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txtCostCenter" class="form-control" id="nmCostCenter" placeholder="Cost Center">
                        <label for="nmCostCenter">Cost Center *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txtRequestAmount" class="form-control" id="nmRequestAmount" placeholder="Request Amount">
                        <label for="nmRequestAmount">Request Amount *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="txtVoucherDate" class="form-control" id="nmVoucherDate" placeholder="Voucher Date">
                        <label for="nmVoucherDate">Voucher Date *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txtCheckNo" class="form-control" id="nmCheckNo" placeholder="Check No.">
                        <label for="nmCheckNo">Check No. *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="txtCheckDate" class="form-control" id="nmCheckDate" placeholder="Check Date">
                        <label for="nmCheckDate">Check Date *</label>
                    </div>
                    <div id="divStaled" hidden></div>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" name="txtAmount" class="form-control" id="nmAmount" placeholder="Amount">
                            <label for="nmAmount">Amount *</label>
                        </div>
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Computation?</button>
                    </div>
                    <div class="form-floating">
                        <textarea name="txtDescription" class="form-control" placeholder="Leave a comment here" id="nmDescription" style="height: 100px"></textarea>
                        <label for="nmDescription">Description *</label>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Computation?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" name="txtGivenamount" class="form-control" id="nmGivenamount" placeholder="Given Amount">
                                    <label for="nmGivenamount">Given Amount *</label>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="txtSamount" class="form-control" id="nmSamount" placeholder="VAT">
                                        <label for="nmSamount">Amount *</label>
                                    </div>
                                    <button type="button" id="btnSamount" class="btn btn-dark">Execute</button>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="txtVAT" class="form-control" id="nmVat" placeholder="VAT">
                                        <label for="nmVat">VAT *</label>
                                    </div>
                                    <button type="button" id="btnVat" class="btn btn-dark">Execute</button>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                    <input type="text" name="txtWtax" class="form-control" id="nmWtax" placeholder="TAX">
                                    <label for="nmWtax">WTAX *</label>
                                </div>
                                    <button type="button" id="btnWtax" class="btn btn-dark">Execute</button>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="txtAmountRequest" class="form-control" id="nmAmountRequest" placeholder="Total Amount">
                                        <label for="nmAmountRequest">Total Amount *</label>
                                    </div>
                                    <button type="button" id="btnAmountrequest" class="btn btn-dark">Execute</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save Computation</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-grid" style="margin-top: 1em;"> 
                    <button class="btn btn-info" id="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card" style="margin-right:.3em; color: #ffffff; background-color: #341763; border-radius: 0px; margin-top: .5em; height: 917px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 style="text-transform: uppercase;">Archives</h5>
                        <p style="font-size: 7pt;">Check / Non-Check Data</p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="search" name="txtSearch" class="form-control" id="nmSearch" >
                                <label for="nmSearch">Search *</label>
                            </div>
                            <button class="btn btn-info" type="button" id="btnSearch"><img src="../icons/magnifying-glass.png" alt=""></button>
                        </div>
                    </div>
                </div>
                <table class="table table-info table-striped" id="tblArchives" style="zoom: 80%;">
                    <thead>
                        <tr style="height: 4em; vertical-align: middle; text-align: center; text-transform: uppercase; font-size: 11pt;">
                            <th style="width: 10%;">RFP No.</th>
                            <th style="width: 25%;">Payee</th>
                            <th style="width: 15%;">Check No.</th>
                            <th style="width: 10%;">Voucher Date</th>
                            <th style="width: 15%;">Amount</th>
                            <th style="width: 25%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows will be populated dynamically -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="printArea"></div>
