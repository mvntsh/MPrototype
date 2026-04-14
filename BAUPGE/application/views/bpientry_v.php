    <div class="row" style="margin: .5em;">
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; height: 580px; overflow-y: scroll; scrollbar-width: thin; scrollbar-color: #451c06 #8c8c8c;">
                <div class="card-body">
                    <h4>Bank Transaction Details</h4>
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
                                <option value="1">Enrolled</option>
                                <option value="2">Unenrolled</option>
                                <option value="3">Own</option>
                            </select>
                            <label for="idTransactionType" style="letter-spacing: -2px;">Transaction type</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nmAccountname" class="form-control" id="idAccountname" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                            <label for="idAccountname" style="letter-spacing: -2px;"> Account Name.</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nmAccountno" class="form-control" id="idAccountno" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                            <label for="idAccountno" style="letter-spacing: -2px;"> Account No.</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nmBatchno" class="form-control" id="idBatch" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                            <label for="idBatch" style="letter-spacing: -2px;"> Batch No.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="border-radius: 0px; height: 580px; overflow-y: scroll; scrollbar-width: thin; scrollbar-color: #451c06 #8c8c8c;">
                <div class="card-body">
                    <h4>In-house Transaction Details</h4>
                    <div style="margin-top: 3em;">
                        <div class="form-floating mb-3">
                            <input type="text" name="nmRfpno" class="form-control" id="idRFPNo" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                            <label for="idRFPNo" style="letter-spacing: -2px;"> RFP No.</label>
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
                            <input type="date" name="nmDate" class="form-control" id="idDate" placeholder="1" style="background-color: #fce9c7; border-color: transparent;">
                            <label for="idDate" style="letter-spacing: -2px;"> Date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 d-grid">
                            <button class="btn btn-success btn-lg" style="letter-spacing: -2px; border-radius: 0px;"><i class="fa-solid fa-arrow-up-right-from-square" style="color: rgb(239, 242, 238);"></i> SAVE.</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#idAccountno,#idBatch,#idRFPNo,#idVoucherNo').keypress(function(e){    
        
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